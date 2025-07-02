<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GenerateBroadcastNewsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GenerateBroadcastNewsResponseBody\data\hotTopicSummaries\images;

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
     * @var string
     */
    public $hotTopicVersion;

    /**
     * @var float
     */
    public $hotValue;

    /**
     * @var string
     */
    public $id;

    /**
     * @var images[]
     */
    public $images;

    /**
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

    public function validate()
    {
        if (\is_array($this->images)) {
            Model::validateArray($this->images);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->images)) {
                $res['images'] = [];
                $n1 = 0;
                foreach ($this->images as $item1) {
                    $res['images'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->textSummary) {
            $res['textSummary'] = $this->textSummary;
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
                $n1 = 0;
                foreach ($map['images'] as $item1) {
                    $model->images[$n1] = images::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['textSummary'])) {
            $model->textSummary = $map['textSummary'];
        }

        return $model;
    }
}
