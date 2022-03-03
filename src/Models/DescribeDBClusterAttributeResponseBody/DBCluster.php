<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterAttributeResponseBody;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterAttributeResponseBody\DBCluster\scaleOutStatus;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterAttributeResponseBody\DBCluster\tags;
use AlibabaCloud\Tea\Model;

class DBCluster extends Model
{
    /**
     * @var string
     */
    public $aliUid;

    /**
     * @var string
     */
    public $bid;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $connectionString;

    /**
     * @var string
     */
    public $controlVersion;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $DBClusterNetworkType;

    /**
     * @var string
     */
    public $DBClusterStatus;

    /**
     * @var string
     */
    public $DBClusterType;

    /**
     * @var string
     */
    public $DBNodeClass;

    /**
     * @var int
     */
    public $DBNodeCount;

    /**
     * @var int
     */
    public $DBNodeStorage;

    /**
     * @var string
     */
    public $encryptionKey;

    /**
     * @var string
     */
    public $encryptionType;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $isExpired;

    /**
     * @var string
     */
    public $lockMode;

    /**
     * @var string
     */
    public $lockReason;

    /**
     * @var string
     */
    public $maintainTime;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $publicConnectionString;

    /**
     * @var string
     */
    public $publicIpAddr;

    /**
     * @var string
     */
    public $publicPort;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var scaleOutStatus
     */
    public $scaleOutStatus;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var int
     */
    public $supportBackup;

    /**
     * @var bool
     */
    public $supportHttpsPort;

    /**
     * @var bool
     */
    public $supportMysqlPort;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcCloudInstanceId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vpcIpAddr;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'aliUid'                 => 'AliUid',
        'bid'                    => 'Bid',
        'category'               => 'Category',
        'commodityCode'          => 'CommodityCode',
        'connectionString'       => 'ConnectionString',
        'controlVersion'         => 'ControlVersion',
        'createTime'             => 'CreateTime',
        'DBClusterDescription'   => 'DBClusterDescription',
        'DBClusterId'            => 'DBClusterId',
        'DBClusterNetworkType'   => 'DBClusterNetworkType',
        'DBClusterStatus'        => 'DBClusterStatus',
        'DBClusterType'          => 'DBClusterType',
        'DBNodeClass'            => 'DBNodeClass',
        'DBNodeCount'            => 'DBNodeCount',
        'DBNodeStorage'          => 'DBNodeStorage',
        'encryptionKey'          => 'EncryptionKey',
        'encryptionType'         => 'EncryptionType',
        'engine'                 => 'Engine',
        'engineVersion'          => 'EngineVersion',
        'expireTime'             => 'ExpireTime',
        'isExpired'              => 'IsExpired',
        'lockMode'               => 'LockMode',
        'lockReason'             => 'LockReason',
        'maintainTime'           => 'MaintainTime',
        'payType'                => 'PayType',
        'port'                   => 'Port',
        'publicConnectionString' => 'PublicConnectionString',
        'publicIpAddr'           => 'PublicIpAddr',
        'publicPort'             => 'PublicPort',
        'regionId'               => 'RegionId',
        'scaleOutStatus'         => 'ScaleOutStatus',
        'storageType'            => 'StorageType',
        'supportBackup'          => 'SupportBackup',
        'supportHttpsPort'       => 'SupportHttpsPort',
        'supportMysqlPort'       => 'SupportMysqlPort',
        'tags'                   => 'Tags',
        'vSwitchId'              => 'VSwitchId',
        'vpcCloudInstanceId'     => 'VpcCloudInstanceId',
        'vpcId'                  => 'VpcId',
        'vpcIpAddr'              => 'VpcIpAddr',
        'zoneId'                 => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->controlVersion) {
            $res['ControlVersion'] = $this->controlVersion;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->DBClusterDescription) {
            $res['DBClusterDescription'] = $this->DBClusterDescription;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->DBClusterNetworkType) {
            $res['DBClusterNetworkType'] = $this->DBClusterNetworkType;
        }
        if (null !== $this->DBClusterStatus) {
            $res['DBClusterStatus'] = $this->DBClusterStatus;
        }
        if (null !== $this->DBClusterType) {
            $res['DBClusterType'] = $this->DBClusterType;
        }
        if (null !== $this->DBNodeClass) {
            $res['DBNodeClass'] = $this->DBNodeClass;
        }
        if (null !== $this->DBNodeCount) {
            $res['DBNodeCount'] = $this->DBNodeCount;
        }
        if (null !== $this->DBNodeStorage) {
            $res['DBNodeStorage'] = $this->DBNodeStorage;
        }
        if (null !== $this->encryptionKey) {
            $res['EncryptionKey'] = $this->encryptionKey;
        }
        if (null !== $this->encryptionType) {
            $res['EncryptionType'] = $this->encryptionType;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->isExpired) {
            $res['IsExpired'] = $this->isExpired;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->maintainTime) {
            $res['MaintainTime'] = $this->maintainTime;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->publicConnectionString) {
            $res['PublicConnectionString'] = $this->publicConnectionString;
        }
        if (null !== $this->publicIpAddr) {
            $res['PublicIpAddr'] = $this->publicIpAddr;
        }
        if (null !== $this->publicPort) {
            $res['PublicPort'] = $this->publicPort;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->scaleOutStatus) {
            $res['ScaleOutStatus'] = null !== $this->scaleOutStatus ? $this->scaleOutStatus->toMap() : null;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->supportBackup) {
            $res['SupportBackup'] = $this->supportBackup;
        }
        if (null !== $this->supportHttpsPort) {
            $res['SupportHttpsPort'] = $this->supportHttpsPort;
        }
        if (null !== $this->supportMysqlPort) {
            $res['SupportMysqlPort'] = $this->supportMysqlPort;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcCloudInstanceId) {
            $res['VpcCloudInstanceId'] = $this->vpcCloudInstanceId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcIpAddr) {
            $res['VpcIpAddr'] = $this->vpcIpAddr;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBCluster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['ControlVersion'])) {
            $model->controlVersion = $map['ControlVersion'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DBClusterDescription'])) {
            $model->DBClusterDescription = $map['DBClusterDescription'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DBClusterNetworkType'])) {
            $model->DBClusterNetworkType = $map['DBClusterNetworkType'];
        }
        if (isset($map['DBClusterStatus'])) {
            $model->DBClusterStatus = $map['DBClusterStatus'];
        }
        if (isset($map['DBClusterType'])) {
            $model->DBClusterType = $map['DBClusterType'];
        }
        if (isset($map['DBNodeClass'])) {
            $model->DBNodeClass = $map['DBNodeClass'];
        }
        if (isset($map['DBNodeCount'])) {
            $model->DBNodeCount = $map['DBNodeCount'];
        }
        if (isset($map['DBNodeStorage'])) {
            $model->DBNodeStorage = $map['DBNodeStorage'];
        }
        if (isset($map['EncryptionKey'])) {
            $model->encryptionKey = $map['EncryptionKey'];
        }
        if (isset($map['EncryptionType'])) {
            $model->encryptionType = $map['EncryptionType'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['IsExpired'])) {
            $model->isExpired = $map['IsExpired'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['MaintainTime'])) {
            $model->maintainTime = $map['MaintainTime'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['PublicConnectionString'])) {
            $model->publicConnectionString = $map['PublicConnectionString'];
        }
        if (isset($map['PublicIpAddr'])) {
            $model->publicIpAddr = $map['PublicIpAddr'];
        }
        if (isset($map['PublicPort'])) {
            $model->publicPort = $map['PublicPort'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ScaleOutStatus'])) {
            $model->scaleOutStatus = scaleOutStatus::fromMap($map['ScaleOutStatus']);
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['SupportBackup'])) {
            $model->supportBackup = $map['SupportBackup'];
        }
        if (isset($map['SupportHttpsPort'])) {
            $model->supportHttpsPort = $map['SupportHttpsPort'];
        }
        if (isset($map['SupportMysqlPort'])) {
            $model->supportMysqlPort = $map['SupportMysqlPort'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcCloudInstanceId'])) {
            $model->vpcCloudInstanceId = $map['VpcCloudInstanceId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcIpAddr'])) {
            $model->vpcIpAddr = $map['VpcIpAddr'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
