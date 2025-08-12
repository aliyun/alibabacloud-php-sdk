<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeDynamicTagRuleListResponseBody\tagGroupList\tagGroup\matchExpress;

use AlibabaCloud\Dara\Model;

class matchExpress extends Model
{
    /**
     * @var string
     */
    public $tagKey;

    /**
     * @var string
     */
    public $tagValue;

    /**
     * @var string
     */
    public $tagValueMatchFunction;
    protected $_name = [
        'tagKey' => 'TagKey',
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
