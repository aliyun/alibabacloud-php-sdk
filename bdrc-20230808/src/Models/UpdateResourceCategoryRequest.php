<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models;

use AlibabaCloud\Dara\Model;

class UpdateResourceCategoryRequest extends Model
{
    /**
     * @var string
     */
    public $resourceCategoryId;

    /**
     * @var string
     */
    public $resourceCategoryName;

    /**
     * @var string
     */
    public $resourceMatcher;
    protected $_name = [
        'resourceCategoryId' => 'ResourceCategoryId',
        'resourceCategoryName' => 'ResourceCategoryName',
        'resourceMatcher' => 'ResourceMatcher',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceCategoryId) {
            $res['ResourceCategoryId'] = $this->resourceCategoryId;
        }

        if (null !== $this->resourceCategoryName) {
            $res['ResourceCategoryName'] = $this->resourceCategoryName;
        }

        if (null !== $this->resourceMatcher) {
            $res['ResourceMatcher'] = $this->resourceMatcher;
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
        if (isset($map['ResourceCategoryId'])) {
            $model->resourceCategoryId = $map['ResourceCategoryId'];
        }

        if (isset($map['ResourceCategoryName'])) {
            $model->resourceCategoryName = $map['ResourceCategoryName'];
        }

        if (isset($map['ResourceMatcher'])) {
            $model->resourceMatcher = $map['ResourceMatcher'];
        }

        return $model;
    }
}
