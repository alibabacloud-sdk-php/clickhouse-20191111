<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Tea\Model;

class DescribeAccountAuthorityResponseBody extends Model
{
    /**
     * @var bool
     */
    public $ddlAuthority;

    /**
     * @var string
     */
    public $dmlAuthority;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $totalDatabases;

    /**
     * @var string[]
     */
    public $totalDictionaries;

    /**
     * @var string[]
     */
    public $allowDictionaries;

    /**
     * @var string[]
     */
    public $allowDatabases;

    /**
     * @var string
     */
    public $accountName;
    protected $_name = [
        'ddlAuthority'      => 'DdlAuthority',
        'dmlAuthority'      => 'DmlAuthority',
        'requestId'         => 'RequestId',
        'totalDatabases'    => 'TotalDatabases',
        'totalDictionaries' => 'TotalDictionaries',
        'allowDictionaries' => 'AllowDictionaries',
        'allowDatabases'    => 'AllowDatabases',
        'accountName'       => 'AccountName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ddlAuthority) {
            $res['DdlAuthority'] = $this->ddlAuthority;
        }
        if (null !== $this->dmlAuthority) {
            $res['DmlAuthority'] = $this->dmlAuthority;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalDatabases) {
            $res['TotalDatabases'] = $this->totalDatabases;
        }
        if (null !== $this->totalDictionaries) {
            $res['TotalDictionaries'] = $this->totalDictionaries;
        }
        if (null !== $this->allowDictionaries) {
            $res['AllowDictionaries'] = $this->allowDictionaries;
        }
        if (null !== $this->allowDatabases) {
            $res['AllowDatabases'] = $this->allowDatabases;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAccountAuthorityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DdlAuthority'])) {
            $model->ddlAuthority = $map['DdlAuthority'];
        }
        if (isset($map['DmlAuthority'])) {
            $model->dmlAuthority = $map['DmlAuthority'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalDatabases'])) {
            if (!empty($map['TotalDatabases'])) {
                $model->totalDatabases = $map['TotalDatabases'];
            }
        }
        if (isset($map['TotalDictionaries'])) {
            if (!empty($map['TotalDictionaries'])) {
                $model->totalDictionaries = $map['TotalDictionaries'];
            }
        }
        if (isset($map['AllowDictionaries'])) {
            if (!empty($map['AllowDictionaries'])) {
                $model->allowDictionaries = $map['AllowDictionaries'];
            }
        }
        if (isset($map['AllowDatabases'])) {
            if (!empty($map['AllowDatabases'])) {
                $model->allowDatabases = $map['AllowDatabases'];
            }
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        return $model;
    }
}
