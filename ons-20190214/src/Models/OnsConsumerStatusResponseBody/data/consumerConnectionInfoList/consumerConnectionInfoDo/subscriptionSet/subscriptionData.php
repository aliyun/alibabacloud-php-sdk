<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\consumerConnectionInfoDo\subscriptionSet;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\consumerConnectionInfoDo\subscriptionSet\subscriptionData\tagsSet;
use AlibabaCloud\Tea\Model;

class subscriptionData extends Model
{
    /**
     * @description The expression that is used to specify the tags of messages in the subscribed topic.
     *
     * @example *
     *
     * @var string
     */
    public $subString;

    /**
     * @description The subscription version. The value is of the LONG type and is automatically incremented.
     *
     * @example 1570701364301
     *
     * @var int
     */
    public $subVersion;

    /**
     * @description The information about the tags of the topic to which the consumer subscribes.
     *
     * @var tagsSet
     */
    public $tagsSet;

    /**
     * @description The name of the topic to which the consumer subscribes.
     *
     * @example test-mq_topic
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'subString'  => 'SubString',
        'subVersion' => 'SubVersion',
        'tagsSet'    => 'TagsSet',
        'topic'      => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subString) {
            $res['SubString'] = $this->subString;
        }
        if (null !== $this->subVersion) {
            $res['SubVersion'] = $this->subVersion;
        }
        if (null !== $this->tagsSet) {
            $res['TagsSet'] = null !== $this->tagsSet ? $this->tagsSet->toMap() : null;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subscriptionData
     */
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
