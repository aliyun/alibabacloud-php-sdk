<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList;

use AlibabaCloud\Tea\Model;

class subscriptionSet extends Model
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
     * @var string
     */
    public $topic;

    /**
     * @var string[]
     */
    public $tagsSet;
    protected $_name = [
        'subString'  => 'SubString',
        'subVersion' => 'SubVersion',
        'topic'      => 'Topic',
        'tagsSet'    => 'TagsSet',
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
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->tagsSet) {
            $res['TagsSet'] = $this->tagsSet;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subscriptionSet
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
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['TagsSet'])) {
            if (!empty($map['TagsSet'])) {
                $model->tagsSet = $map['TagsSet'];
            }
        }

        return $model;
    }
}
