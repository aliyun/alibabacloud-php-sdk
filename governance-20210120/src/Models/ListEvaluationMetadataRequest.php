<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models;

use AlibabaCloud\Dara\Model;

class ListEvaluationMetadataRequest extends Model
{
    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $lensCode;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $topicCode;
    protected $_name = [
        'language' => 'Language',
        'lensCode' => 'LensCode',
        'regionId' => 'RegionId',
        'topicCode' => 'TopicCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->lensCode) {
            $res['LensCode'] = $this->lensCode;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->topicCode) {
            $res['TopicCode'] = $this->topicCode;
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
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['LensCode'])) {
            $model->lensCode = $map['LensCode'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['TopicCode'])) {
            $model->topicCode = $map['TopicCode'];
        }

        return $model;
    }
}
