<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsGroupSubDetailResponseBody\data\subscriptionDataList;

use AlibabaCloud\Tea\Model;

class subscriptionDataList extends Model
{
    /**
     * @description The expression based on which consumers in the consumer group subscribe to the topic.
     *
     * @example *
     *
     * @var string
     */
    public $subString;

    /**
     * @description The name of the topic to which consumers in the consumer group subscribe.
     *
     * @example test-mq_topic
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'subString' => 'SubString',
        'topic' => 'Topic',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->subString) {
            $res['SubString'] = $this->subString;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subscriptionDataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubString'])) {
            $model->subString = $map['SubString'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
