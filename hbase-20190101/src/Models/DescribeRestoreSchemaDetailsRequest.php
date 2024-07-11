<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeRestoreSchemaDetailsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ld-m5eznlga4k5bcxxxx
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description This parameter is required.
     *
     * @example 2020110514xxxx
     *
     * @var string
     */
    public $restoreRecordId;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'restoreRecordId' => 'RestoreRecordId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->restoreRecordId) {
            $res['RestoreRecordId'] = $this->restoreRecordId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRestoreSchemaDetailsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RestoreRecordId'])) {
            $model->restoreRecordId = $map['RestoreRecordId'];
        }

        return $model;
    }
}
