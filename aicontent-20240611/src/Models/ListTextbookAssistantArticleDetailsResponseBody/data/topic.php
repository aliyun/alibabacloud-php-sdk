<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantArticleDetailsResponseBody\data;

use AlibabaCloud\Dara\Model;

class topic extends Model
{
    /**
     * @var string[]
     */
    public $topicImageList;

    /**
     * @var string
     */
    public $topicName;

    /**
     * @var string
     */
    public $topicTranslate;
    protected $_name = [
        'topicImageList' => 'topicImageList',
        'topicName' => 'topicName',
        'topicTranslate' => 'topicTranslate',
    ];

    public function validate()
    {
        if (\is_array($this->topicImageList)) {
            Model::validateArray($this->topicImageList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->topicImageList) {
            if (\is_array($this->topicImageList)) {
                $res['topicImageList'] = [];
                $n1 = 0;
                foreach ($this->topicImageList as $item1) {
                    $res['topicImageList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->topicName) {
            $res['topicName'] = $this->topicName;
        }

        if (null !== $this->topicTranslate) {
            $res['topicTranslate'] = $this->topicTranslate;
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
        if (isset($map['topicImageList'])) {
            if (!empty($map['topicImageList'])) {
                $model->topicImageList = [];
                $n1 = 0;
                foreach ($map['topicImageList'] as $item1) {
                    $model->topicImageList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['topicName'])) {
            $model->topicName = $map['topicName'];
        }

        if (isset($map['topicTranslate'])) {
            $model->topicTranslate = $map['topicTranslate'];
        }

        return $model;
    }
}
