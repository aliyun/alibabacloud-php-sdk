<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicChatResponseBody\payload\output;

use AlibabaCloud\Tea\Model;

class hotTopicSummaries extends Model
{
    /**
     * @example 100000
     *
     * @var float
     */
    public $customHotValue;

    /**
     * @example xx
     *
     * @var string
     */
    public $hotTopic;

    /**
     * @example 2024-09-13_08
     *
     * @var string
     */
    public $hotTopicVersion;

    /**
     * @example 100000
     *
     * @var float
     */
    public $hotValue;
    protected $_name = [
        'customHotValue'  => 'customHotValue',
        'hotTopic'        => 'hotTopic',
        'hotTopicVersion' => 'hotTopicVersion',
        'hotValue'        => 'hotValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customHotValue) {
            $res['customHotValue'] = $this->customHotValue;
        }
        if (null !== $this->hotTopic) {
            $res['hotTopic'] = $this->hotTopic;
        }
        if (null !== $this->hotTopicVersion) {
            $res['hotTopicVersion'] = $this->hotTopicVersion;
        }
        if (null !== $this->hotValue) {
            $res['hotValue'] = $this->hotValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hotTopicSummaries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['customHotValue'])) {
            $model->customHotValue = $map['customHotValue'];
        }
        if (isset($map['hotTopic'])) {
            $model->hotTopic = $map['hotTopic'];
        }
        if (isset($map['hotTopicVersion'])) {
            $model->hotTopicVersion = $map['hotTopicVersion'];
        }
        if (isset($map['hotValue'])) {
            $model->hotValue = $map['hotValue'];
        }

        return $model;
    }
}
