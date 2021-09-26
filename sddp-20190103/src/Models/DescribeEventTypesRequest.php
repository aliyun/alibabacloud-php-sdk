<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DescribeEventTypesRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $parentTypeId;

    /**
     * @var int
     */
    public $resourceId;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'lang'         => 'Lang',
        'parentTypeId' => 'ParentTypeId',
        'resourceId'   => 'ResourceId',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->parentTypeId) {
            $res['ParentTypeId'] = $this->parentTypeId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEventTypesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ParentTypeId'])) {
            $model->parentTypeId = $map['ParentTypeId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
