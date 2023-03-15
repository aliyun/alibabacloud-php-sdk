<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\CreateTemplateScratchRequest;

use AlibabaCloud\Tea\Model;

class sourceTag extends Model
{
    /**
     * @description The source tags that consist of key-value pairs.
     *
     * You can add up to 10 source tags.
     * @example {"a": "b"}
     *
     * @var mixed[]
     */
    public $resourceTags;

    /**
     * @description The filter for resource types. If you specify this parameter, only the resources of the specified types and have the specified tags are scanned. If you do not specify this parameter, all resources that have the specified tags are scanned.
     *
     * You can specify up to 20 resource types.
     * @var string[]
     */
    public $resourceTypeFilter;
    protected $_name = [
        'resourceTags'       => 'ResourceTags',
        'resourceTypeFilter' => 'ResourceTypeFilter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceTags) {
            $res['ResourceTags'] = $this->resourceTags;
        }
        if (null !== $this->resourceTypeFilter) {
            $res['ResourceTypeFilter'] = $this->resourceTypeFilter;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceTag
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceTags'])) {
            $model->resourceTags = $map['ResourceTags'];
        }
        if (isset($map['ResourceTypeFilter'])) {
            if (!empty($map['ResourceTypeFilter'])) {
                $model->resourceTypeFilter = $map['ResourceTypeFilter'];
            }
        }

        return $model;
    }
}
