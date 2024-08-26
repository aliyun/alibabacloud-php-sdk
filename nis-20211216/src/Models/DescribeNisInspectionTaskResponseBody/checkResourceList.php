<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionTaskResponseBody;

use AlibabaCloud\Tea\Model;

class checkResourceList extends Model
{
    /**
     * @example CheckAll
     *
     * @var string
     */
    public $checkScope;

    /**
     * @example EIP
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'checkScope'   => 'CheckScope',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkScope) {
            $res['CheckScope'] = $this->checkScope;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkResourceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckScope'])) {
            $model->checkScope = $map['CheckScope'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
