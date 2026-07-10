<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class BatchQueryDepartmentRequest extends Model
{
    /**
     * @var string
     */
    public $modifiedTimeGreaterOrEqualThan;

    /**
     * @var string
     */
    public $outDeptId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $pageToken;
    protected $_name = [
        'modifiedTimeGreaterOrEqualThan' => 'modified_time_greater_or_equal_than',
        'outDeptId' => 'out_dept_id',
        'pageSize' => 'page_size',
        'pageToken' => 'page_token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modifiedTimeGreaterOrEqualThan) {
            $res['modified_time_greater_or_equal_than'] = $this->modifiedTimeGreaterOrEqualThan;
        }

        if (null !== $this->outDeptId) {
            $res['out_dept_id'] = $this->outDeptId;
        }

        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }

        if (null !== $this->pageToken) {
            $res['page_token'] = $this->pageToken;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['modified_time_greater_or_equal_than'])) {
            $model->modifiedTimeGreaterOrEqualThan = $map['modified_time_greater_or_equal_than'];
        }

        if (isset($map['out_dept_id'])) {
            $model->outDeptId = $map['out_dept_id'];
        }

        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }

        if (isset($map['page_token'])) {
            $model->pageToken = $map['page_token'];
        }

        return $model;
    }
}
