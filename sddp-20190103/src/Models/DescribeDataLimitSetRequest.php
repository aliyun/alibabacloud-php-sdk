<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DescribeDataLimitSetRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $resourceType;

    /**
     * @var string
     */
    public $parentId;
    protected $_name = [
        'lang'         => 'Lang',
        'resourceType' => 'ResourceType',
        'parentId'     => 'ParentId',
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
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDataLimitSetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }

        return $model;
    }
}
