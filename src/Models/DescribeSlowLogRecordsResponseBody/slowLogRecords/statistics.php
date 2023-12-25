<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSlowLogRecordsResponseBody\slowLogRecords;

use AlibabaCloud\Tea\Model;

class statistics extends Model
{
    /**
     * @description The total size of data that were read. Unit: bytes.
     *
     * @example 123456
     *
     * @var int
     */
    public $bytesRead;

    /**
     * @description The time consumed by the slow query. Unit: milliseconds.
     *
     * @example 21.35
     *
     * @var float
     */
    public $elapsedTime;

    /**
     * @description The total number of rows that were read.
     *
     * @example 2016722
     *
     * @var int
     */
    public $rowsRead;
    protected $_name = [
        'bytesRead'   => 'BytesRead',
        'elapsedTime' => 'ElapsedTime',
        'rowsRead'    => 'RowsRead',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bytesRead) {
            $res['BytesRead'] = $this->bytesRead;
        }
        if (null !== $this->elapsedTime) {
            $res['ElapsedTime'] = $this->elapsedTime;
        }
        if (null !== $this->rowsRead) {
            $res['RowsRead'] = $this->rowsRead;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BytesRead'])) {
            $model->bytesRead = $map['BytesRead'];
        }
        if (isset($map['ElapsedTime'])) {
            $model->elapsedTime = $map['ElapsedTime'];
        }
        if (isset($map['RowsRead'])) {
            $model->rowsRead = $map['RowsRead'];
        }

        return $model;
    }
}
