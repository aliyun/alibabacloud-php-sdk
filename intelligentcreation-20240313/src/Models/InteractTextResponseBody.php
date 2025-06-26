<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class InteractTextResponseBody extends Model
{
    /**
     * @var bool
     */
    public $end;

    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string[]
     */
    public $relatedImages;

    /**
     * @var string[]
     */
    public $relatedVideos;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'end' => 'end',
        'index' => 'index',
        'message' => 'message',
        'relatedImages' => 'relatedImages',
        'relatedVideos' => 'relatedVideos',
        'sessionId' => 'sessionId',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->relatedImages)) {
            Model::validateArray($this->relatedImages);
        }
        if (\is_array($this->relatedVideos)) {
            Model::validateArray($this->relatedVideos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->end) {
            $res['end'] = $this->end;
        }

        if (null !== $this->index) {
            $res['index'] = $this->index;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->relatedImages) {
            if (\is_array($this->relatedImages)) {
                $res['relatedImages'] = [];
                $n1 = 0;
                foreach ($this->relatedImages as $item1) {
                    $res['relatedImages'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->relatedVideos) {
            if (\is_array($this->relatedVideos)) {
                $res['relatedVideos'] = [];
                $n1 = 0;
                foreach ($this->relatedVideos as $item1) {
                    $res['relatedVideos'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['end'])) {
            $model->end = $map['end'];
        }

        if (isset($map['index'])) {
            $model->index = $map['index'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['relatedImages'])) {
            if (!empty($map['relatedImages'])) {
                $model->relatedImages = [];
                $n1 = 0;
                foreach ($map['relatedImages'] as $item1) {
                    $model->relatedImages[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['relatedVideos'])) {
            if (!empty($map['relatedVideos'])) {
                $model->relatedVideos = [];
                $n1 = 0;
                foreach ($map['relatedVideos'] as $item1) {
                    $model->relatedVideos[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
