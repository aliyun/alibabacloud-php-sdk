<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeDynamicTagRuleListResponseBody\tagGroupList\tagGroup\matchExpress;

use AlibabaCloud\Tea\Model;

class matchExpress extends Model
{
    /**
     * @description The tag key.
     *
     * @example azone-version
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description The tag value.
     *
     * The `TagValue` and `TagValueMatchFunction` parameters must be used in pairs.
     * @example *
     *
     * @var string
     */
    public $tagValue;

    /**
     * @description The method that is used to match tag values. Valid values:
     *
     *   all: includes all
     *   startWith: starts with a prefix
     *   endWith: ends with a suffix
     *   contains: contains
     *   notContains: does not contain
     *   equals: equals
     *
     * @example all
     *
     * @var string
     */
    public $tagValueMatchFunction;
    protected $_name = [
        'tagKey'                => 'TagKey',
        'tagValue'              => 'TagValue',
        'tagValueMatchFunction' => 'TagValueMatchFunction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }
        if (null !== $this->tagValueMatchFunction) {
            $res['TagValueMatchFunction'] = $this->tagValueMatchFunction;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return matchExpress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }
        if (isset($map['TagValueMatchFunction'])) {
            $model->tagValueMatchFunction = $map['TagValueMatchFunction'];
        }

        return $model;
    }
}
