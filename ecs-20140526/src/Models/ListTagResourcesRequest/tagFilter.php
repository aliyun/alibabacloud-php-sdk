<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ListTagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tagFilter extends Model
{
    /**
     * @description The key of tag N used for fuzzy search of ECS resources. The tag key must be 1 to 128 characters in length. Valid values of N: 1 to 5.
     *
     * The `TagFilter.N` parameter pair (TagFilter.N.TagKey and TagFilter.N.TagValues.N) is used for fuzzy search of ECS resources that have specified tags added. In the specified tags, a single tag key may correspond to one or more tag values. Fuzzy search may have a latency of 2 seconds. A fuzzy search can return a result set of entries about a maximum of 5,000 resources.
     *
     *   When you use `TagFilter.N.TagKey` for fuzzy search of ECS resources, you must leave `TagFilter.N.TagValues.N` empty. For example, to query ECS resources whose tags contain the `environment` tag key, you can set `TagFilter.1.TagKey` to `env*` for prefix search, `*env*` for infix search, or `env` for exact search, but you must leave `TagFilter.1.TagValues` empty.
     *   When you use `TagFilter.N.TagValues.N` for fuzzy search of ECS resources, you must set `TagFilter.N.TagKey` to an exact value. For example, to query ECS resources that have a tag composed of the `env` tag key and the `product` tag value, you must set `TagFilter.1.TagKey` to `env` and can set `TagFilter.1.TagValues.1` to `proc*` for prefix search, to `*proc*` for infix search, or to `proc` for exact search. Only one of the preceding search methods can be used for each tag key (`TagFilter.N.TagKey`). If multiple search methods are configured for a tag key, the first search method prevails.
     *   If you specify multiple tag keys, only the ECS resources that have all the specified tag keys added are returned.
     *   If you specify a tag key that corresponds to multiple tag values, all the ECS resources that have one or more of these tag key-value pairs added are returned.
     *
     * > The `TagFilter.N` parameter pair (TagFilter.N.TagKey and TagFilter.N.TagValues.N) cannot be used together with the `Tag.N` parameter pair (Tag.N.Key and Tag.N.Value). Otherwise, an error message is returned.
     *
     * @example env
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description The values of tag N used for fuzzy search of ECS resources. The tag values must be 1 to 128 characters in length. Valid values of N: 1 to 5. For more information, see the description of `TagFilter.N.TagKey`.
     *
     * @example TestTagFilter
     *
     * @var string[]
     */
    public $tagValues;
    protected $_name = [
        'tagKey' => 'TagKey',
        'tagValues' => 'TagValues',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }
        if (null !== $this->tagValues) {
            $res['TagValues'] = $this->tagValues;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagFilter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }
        if (isset($map['TagValues'])) {
            if (!empty($map['TagValues'])) {
                $model->tagValues = $map['TagValues'];
            }
        }

        return $model;
    }
}
