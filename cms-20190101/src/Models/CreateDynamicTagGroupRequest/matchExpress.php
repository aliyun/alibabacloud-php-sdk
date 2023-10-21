<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\CreateDynamicTagGroupRequest;

use AlibabaCloud\Tea\Model;

class matchExpress extends Model
{
    /**
     * @description The tag values of the cloud resources. In this example, set the value of N to 1.
     *
     * >  If you set the `MatchExpress.N.TagValueMatchFunction` parameter, you must also set the `MatchExpress.N.TagValue` parameter.
     * @example appname
     *
     * @var string
     */
    public $tagName;

    /**
     * @description The ID of the region to which the tags belong.
     *
     * @example instance
     *
     * @var string
     */
    public $tagValue;

    /**
     * @description The error message.
     *
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
