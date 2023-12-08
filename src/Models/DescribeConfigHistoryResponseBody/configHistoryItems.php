<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeConfigHistoryResponseBody;

use AlibabaCloud\Tea\Model;

class configHistoryItems extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $changeId;

    /**
     * @example 253460731706911258
     *
     * @var string
     */
    public $ownerId;

    /**
     * @example test
     *
     * @var string
     */
    public $reason;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example 2022-08-22T10:00:00Z
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'changeId' => 'ChangeId',
        'ownerId'  => 'OwnerId',
        'reason'   => 'Reason',
        'success'  => 'Success',
        'time'     => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeId) {
            $res['ChangeId'] = $this->changeId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configHistoryItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeId'])) {
            $model->changeId = $map['ChangeId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
