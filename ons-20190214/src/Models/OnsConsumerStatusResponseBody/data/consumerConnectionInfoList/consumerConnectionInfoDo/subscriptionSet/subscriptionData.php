<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\consumerConnectionInfoDo\subscriptionSet;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\consumerConnectionInfoDo\subscriptionSet\subscriptionData\tagsSet;

class subscriptionData extends Model
{
    /**
     * @var string
     */
    public $subString;

    /**
     * @var int
     */
    public $subVersion;

    /**
     * @var tagsSet
     */
    public $tagsSet;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'subString' => 'SubString',
        'subVersion' => 'SubVersion',
        'tagsSet' => 'TagsSet',
        'topic' => 'Topic',
    ];

    public function validate()
    {
        if (null !== $this->tagsSet) {
            $this->tagsSet->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->subString) {
            $res['SubString'] = $this->subString;
        }

        if (null !== $this->subVersion) {
            $res['SubVersion'] = $this->subVersion;
        }

        if (null !== $this->tagsSet) {
            $res['TagsSet'] = null !== $this->tagsSet ? $this->tagsSet->toArray($noStream) : $this->tagsSet;
        }

        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
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
        if (isset($map['SubString'])) {
            $model->subString = $map['SubString'];
        }

        if (isset($map['SubVersion'])) {
            $model->subVersion = $map['SubVersion'];
        }

        if (isset($map['TagsSet'])) {
            $model->tagsSet = tagsSet::fromMap($map['TagsSet']);
        }

        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
