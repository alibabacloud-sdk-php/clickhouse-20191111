<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Tea\Model;

class CheckClickhouseToRDSRequest extends Model
{
    /**
     * @description The password of the account that is used to log on to the database in the ApsaraDB for ClickHouse cluster.
     *
     * @example 123456Aa
     *
     * @var string
     */
    public $ckPassword;

    /**
     * @description The account that is used to log on to the database in the ApsaraDB for ClickHouse cluster.
     *
     * @example user1
     *
     * @var string
     */
    public $ckUserName;

    /**
     * @description The port number of the ApsaraDB for ClickHouse cluster.
     *
     * @example 8123
     *
     * @var int
     */
    public $clickhousePort;

    /**
     * @description The ID of the ApsaraDB for ClickHouse cluster.
     *
     * @example cc-2zeyy362b5sbm****
     *
     * @var string
     */
    public $dbClusterId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the ApsaraDB RDS for MySQL instance.
     *
     * @example rm-bp13v4bnwlu8j****
     *
     * @var string
     */
    public $rdsId;

    /**
     * @description The password of the account that is used to log on to the database in the ApsaraDB RDS for MySQL instance.
     *
     * @example 123456Rr
     *
     * @var string
     */
    public $rdsPassword;

    /**
     * @description The port number of the ApsaraDB RDS for MySQL instance.
     *
     * @example 3306
     *
     * @var int
     */
    public $rdsPort;

    /**
     * @description The account that is used to log on to the database in the ApsaraDB RDS for MySQL instance.
     *
     * @example user2
     *
     * @var string
     */
    public $rdsUserName;

    /**
     * @description The ID of the VPC in which the ApsaraDB RDS for MySQL instance is deployed.
     *
     * @example vpc-wz9mm0qka0winfl47****
     *
     * @var string
     */
    public $rdsVpcId;

    /**
     * @description The internal endpoint of the ApsaraDB RDS for MySQL instance.
     *
     * @example rm-bp16t9h3999xb0a7****.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $rdsVpcUrl;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'ckPassword'           => 'CkPassword',
        'ckUserName'           => 'CkUserName',
        'clickhousePort'       => 'ClickhousePort',
        'dbClusterId'          => 'DbClusterId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'rdsId'                => 'RdsId',
        'rdsPassword'          => 'RdsPassword',
        'rdsPort'              => 'RdsPort',
        'rdsUserName'          => 'RdsUserName',
        'rdsVpcId'             => 'RdsVpcId',
        'rdsVpcUrl'            => 'RdsVpcUrl',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ckPassword) {
            $res['CkPassword'] = $this->ckPassword;
        }
        if (null !== $this->ckUserName) {
            $res['CkUserName'] = $this->ckUserName;
        }
        if (null !== $this->clickhousePort) {
            $res['ClickhousePort'] = $this->clickhousePort;
        }
        if (null !== $this->dbClusterId) {
            $res['DbClusterId'] = $this->dbClusterId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->rdsId) {
            $res['RdsId'] = $this->rdsId;
        }
        if (null !== $this->rdsPassword) {
            $res['RdsPassword'] = $this->rdsPassword;
        }
        if (null !== $this->rdsPort) {
            $res['RdsPort'] = $this->rdsPort;
        }
        if (null !== $this->rdsUserName) {
            $res['RdsUserName'] = $this->rdsUserName;
        }
        if (null !== $this->rdsVpcId) {
            $res['RdsVpcId'] = $this->rdsVpcId;
        }
        if (null !== $this->rdsVpcUrl) {
            $res['RdsVpcUrl'] = $this->rdsVpcUrl;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckClickhouseToRDSRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CkPassword'])) {
            $model->ckPassword = $map['CkPassword'];
        }
        if (isset($map['CkUserName'])) {
            $model->ckUserName = $map['CkUserName'];
        }
        if (isset($map['ClickhousePort'])) {
            $model->clickhousePort = $map['ClickhousePort'];
        }
        if (isset($map['DbClusterId'])) {
            $model->dbClusterId = $map['DbClusterId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RdsId'])) {
            $model->rdsId = $map['RdsId'];
        }
        if (isset($map['RdsPassword'])) {
            $model->rdsPassword = $map['RdsPassword'];
        }
        if (isset($map['RdsPort'])) {
            $model->rdsPort = $map['RdsPort'];
        }
        if (isset($map['RdsUserName'])) {
            $model->rdsUserName = $map['RdsUserName'];
        }
        if (isset($map['RdsVpcId'])) {
            $model->rdsVpcId = $map['RdsVpcId'];
        }
        if (isset($map['RdsVpcUrl'])) {
            $model->rdsVpcUrl = $map['RdsVpcUrl'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
