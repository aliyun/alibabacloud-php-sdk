<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\CreateDynamicTagGroupRequest;

use AlibabaCloud\Tea\Model;

class matchExpress extends Model
{
    /**
     * @description The keys of the tags that are used to create the application group. If a specified key is attached to multiple resources, the resources that have the same key-value pair are added to the same group.
     *
     * @example appname
     *
     * @var string
     */
    public $tagName;

    /**
     * @description The tag values of the cloud resources. Set the value of N to 1.
     *
     * >  If you set the `MatchExpress.N.TagValueMatchFunction` parameter, you must also set the `MatchExpress.N.TagValue` parameter.
     * @example instance
     *
     * @var string
     */
    public $tagValue;

    /**
     * @description The method that is used to match the tag values of the cloud resources. Set the value of N to 1. Valid values:
     *
     *   contains: contains
     *   startWith: starts with a prefix
     *   endWith: ends with a suffix
     *   notContains: does not contain
     *   equals: equals
     *   all: matches all
     *
     * >  If you set the `MatchExpress.N.TagValueMatchFunction` parameter, you must also set the `MatchExpress.N.TagValue` parameter.
     * @example contains
     *
     * @var string
     */
    public $tagValueMatchFunction;
    protected $_name = [
        'tagName'               => 'TagName',
        'tagValue'              => 'TagValue',
        'tagValueMatchFunction' => 'TagValueMatchFunction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
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
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
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
