<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionTaskResponseBody;

use AlibabaCloud\Dara\Model;

class checkResourceList extends Model
{
    /**
     * @var string
     */
    public $checkScope;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'checkScope' => 'CheckScope',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
