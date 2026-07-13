<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models;

use AlibabaCloud\Dara\Model;

class CreateResourceCategoryRequest extends Model
{
    /**
     * @var string
     */
    public $resourceCategoryName;

    /**
     * @var string
     */
    public $resourceMatcher;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'resourceCategoryName' => 'ResourceCategoryName',
        'resourceMatcher' => 'ResourceMatcher',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceCategoryName) {
            $res['ResourceCategoryName'] = $this->resourceCategoryName;
        }

        if (null !== $this->resourceMatcher) {
            $res['ResourceMatcher'] = $this->resourceMatcher;
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
        if (isset($map['ResourceCategoryName'])) {
            $model->resourceCategoryName = $map['ResourceCategoryName'];
        }

        if (isset($map['ResourceMatcher'])) {
            $model->resourceMatcher = $map['ResourceMatcher'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
