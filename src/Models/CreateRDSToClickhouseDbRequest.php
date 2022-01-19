<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Tea\Model;

class CreateRDSToClickhouseDbRequest extends Model
{
    /**
     * @var string
     */
    public $ckPassword;

    /**
     * @var string
     */
    public $ckUserName;

    /**
     * @var int
     */
    public $clickhousePort;

    /**
     * @var string
     */
    public $dbClusterId;

    /**
     * @var int
     */
    public $limitUpper;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $rdsId;

    /**
     * @var string
     */
    public $rdsPassword;

    /**
     * @var int
     */
    public $rdsPort;

    /**
     * @var string
     */
    public $rdsUserName;

    /**
     * @var string
     */
    public $rdsVpcId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var bool
     */
    public $skipUnsupported;

    /**
     * @var string
     */
    public $synDbTables;
    protected $_name = [
        'ckPassword'           => 'CkPassword',
        'ckUserName'           => 'CkUserName',
        'clickhousePort'       => 'ClickhousePort',
        'dbClusterId'          => 'DbClusterId',
        'limitUpper'           => 'LimitUpper',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'rdsId'                => 'RdsId',
        'rdsPassword'          => 'RdsPassword',
        'rdsPort'              => 'RdsPort',
        'rdsUserName'          => 'RdsUserName',
        'rdsVpcId'             => 'RdsVpcId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'skipUnsupported'      => 'SkipUnsupported',
        'synDbTables'          => 'SynDbTables',
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
        if (null !== $this->limitUpper) {
            $res['LimitUpper'] = $this->limitUpper;
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
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->skipUnsupported) {
            $res['SkipUnsupported'] = $this->skipUnsupported;
        }
        if (null !== $this->synDbTables) {
            $res['SynDbTables'] = $this->synDbTables;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRDSToClickhouseDbRequest
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
        if (isset($map['LimitUpper'])) {
            $model->limitUpper = $map['LimitUpper'];
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
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SkipUnsupported'])) {
            $model->skipUnsupported = $map['SkipUnsupported'];
        }
        if (isset($map['SynDbTables'])) {
            $model->synDbTables = $map['SynDbTables'];
        }

        return $model;
    }
}