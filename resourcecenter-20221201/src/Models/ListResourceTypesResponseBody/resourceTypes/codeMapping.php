<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListResourceTypesResponseBody\resourceTypes;

use AlibabaCloud\Tea\Model;

class codeMapping extends Model
{
    /**
     * @example cs.cluster
     *
     * @var string
     */
    public $resourceGroup;

    /**
     * @example cs.cluster
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'resourceGroup' => 'ResourceGroup',
        'tag'           => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return codeMapping
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
