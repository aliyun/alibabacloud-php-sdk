<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GenerateBroadcastNewsResponseBody\data;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GenerateBroadcastNewsResponseBody\data\hotTopicSummaries\images;
use AlibabaCloud\Tea\Model;

class hotTopicSummaries extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
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
     * @example 1000000
     *
     * @var float
     */
    public $hotValue;

    /**
     * @example 1458tb3bjo7531kap42a
     *
     * @var string
     */
    public $id;

    /**
     * @var images[]
     */
    public $images;

    /**
     * @example xxx
     *
     * @var string
     */
    public $textSummary;
    protected $_name = [
        'category' => 'category',
        'hotTopic' => 'hotTopic',
        'hotTopicVersion' => 'hotTopicVersion',
        'hotValue' => 'hotValue',
        'id' => 'id',
        'images' => 'images',
        'textSummary' => 'textSummary',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
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
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->images) {
            $res['images'] = [];
            if (null !== $this->images && \is_array($this->images)) {
                $n = 0;
                foreach ($this->images as $item) {
                    $res['images'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->textSummary) {
            $res['textSummary'] = $this->textSummary;
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
        if (isset($map['category'])) {
            $model->category = $map['category'];
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
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['images'])) {
            if (!empty($map['images'])) {
                $model->images = [];
                $n = 0;
                foreach ($map['images'] as $item) {
                    $model->images[$n++] = null !== $item ? images::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['textSummary'])) {
            $model->textSummary = $map['textSummary'];
        }

        return $model;
    }
}
