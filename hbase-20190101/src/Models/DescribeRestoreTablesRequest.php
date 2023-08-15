<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeRestoreTablesRequest extends Model
{
    /**
     * @example ld-m5eznlga4k5bcxxxx
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 2020110514xxxx
     *
     * @var string
     */
    public $restoreRecordId;
    protected $_name = [
        'clusterId'       => 'ClusterId',
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
        if (null !== $this->restoreRecordId) {
            $res['RestoreRecordId'] = $this->restoreRecordId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRestoreTablesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['RestoreRecordId'])) {
            $model->restoreRecordId = $map['RestoreRecordId'];
        }

        return $model;
    }
}
