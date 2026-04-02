<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class UsageInfoDTO extends Model
{
    /**
     * @var int
     */
    public $completionTokens;

    /**
     * @var int
     */
    public $imageCount;

    /**
     * @var int
     */
    public $promptTokens;

    /**
     * @var int
     */
    public $totalTokens;

    /**
     * @var int
     */
    public $videoCount;

    /**
     * @var int
     */
    public $videoDuration;
    protected $_name = [
        'completionTokens' => 'completionTokens',
        'imageCount' => 'imageCount',
        'promptTokens' => 'promptTokens',
        'totalTokens' => 'totalTokens',
        'videoCount' => 'videoCount',
        'videoDuration' => 'videoDuration',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completionTokens) {
            $res['completionTokens'] = $this->completionTokens;
        }

        if (null !== $this->imageCount) {
            $res['imageCount'] = $this->imageCount;
        }

        if (null !== $this->promptTokens) {
            $res['promptTokens'] = $this->promptTokens;
        }

        if (null !== $this->totalTokens) {
            $res['totalTokens'] = $this->totalTokens;
        }

        if (null !== $this->videoCount) {
            $res['videoCount'] = $this->videoCount;
        }

        if (null !== $this->videoDuration) {
            $res['videoDuration'] = $this->videoDuration;
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
        if (isset($map['completionTokens'])) {
            $model->completionTokens = $map['completionTokens'];
        }

        if (isset($map['imageCount'])) {
            $model->imageCount = $map['imageCount'];
        }

        if (isset($map['promptTokens'])) {
            $model->promptTokens = $map['promptTokens'];
        }

        if (isset($map['totalTokens'])) {
            $model->totalTokens = $map['totalTokens'];
        }

        if (isset($map['videoCount'])) {
            $model->videoCount = $map['videoCount'];
        }

        if (isset($map['videoDuration'])) {
            $model->videoDuration = $map['videoDuration'];
        }

        return $model;
    }
}
