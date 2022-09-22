<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayResponseBody\resourceDisplay\instanceCategories\instanceCategory\instanceTopCategories\instanceTopCategory\instanceSecondCategories\instanceSecondCategory\instanceTypeFamilies;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayResponseBody\resourceDisplay\instanceCategories\instanceCategory\instanceTopCategories\instanceTopCategory\instanceSecondCategories\instanceSecondCategory\instanceTypeFamilies\instanceTypeFamily\tags;
use AlibabaCloud\Tea\Model;

class instanceTypeFamily extends Model
{
    /**
     * @var string
     */
    public $instanceTypeFamilyId;

    /**
     * @var tags
     */
    public $tags;
    protected $_name = [
        'instanceTypeFamilyId' => 'InstanceTypeFamilyId',
        'tags'                 => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTypeFamilyId) {
            $res['InstanceTypeFamilyId'] = $this->instanceTypeFamilyId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTypeFamily
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceTypeFamilyId'])) {
            $model->instanceTypeFamilyId = $map['InstanceTypeFamilyId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
