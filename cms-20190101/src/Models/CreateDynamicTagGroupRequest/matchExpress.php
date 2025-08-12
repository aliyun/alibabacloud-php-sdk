<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\CreateDynamicTagGroupRequest;

use AlibabaCloud\Dara\Model;

class matchExpress extends Model
{
    /**
     * @var string
     */
    public $tagName;

    /**
     * @var string
     */
    public $tagValue;

    /**
     * @var string
     */
    public $tagValueMatchFunction;
    protected $_name = [
        'tagName' => 'TagName',
        'tagValue' => 'TagValue',
        'tagValueMatchFunction' => 'TagValueMatchFunction',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
