<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyDBClusterResponseBody\DBCluster;
use AlibabaCloud\Tea\Model;

class ModifyDBClusterResponseBody extends Model
{
    /**
     * @description The information about the cluster.
     *
     * @var DBCluster
     */
    public $DBCluster;

    /**
     * @description The request ID.
     *
     * @example BA30A000-3A4D-5B97-9420-E5D0D49F7016
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBCluster' => 'DBCluster',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBCluster) {
            $res['DBCluster'] = null !== $this->DBCluster ? $this->DBCluster->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBClusterResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBCluster'])) {
            $model->DBCluster = DBCluster::fromMap($map['DBCluster']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
