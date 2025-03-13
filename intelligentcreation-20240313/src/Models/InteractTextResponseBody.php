<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class InteractTextResponseBody extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $end;

    /**
     * @example 1
     *
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
     * @example 79e954faffe2415ebd18188ba787d78e
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example 2
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'end'           => 'end',
        'index'         => 'index',
        'message'       => 'message',
        'relatedImages' => 'relatedImages',
        'relatedVideos' => 'relatedVideos',
        'sessionId'     => 'sessionId',
        'type'          => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['relatedImages'] = $this->relatedImages;
        }
        if (null !== $this->relatedVideos) {
            $res['relatedVideos'] = $this->relatedVideos;
        }
        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InteractTextResponseBody
     */
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
                $model->relatedImages = $map['relatedImages'];
            }
        }
        if (isset($map['relatedVideos'])) {
            if (!empty($map['relatedVideos'])) {
                $model->relatedVideos = $map['relatedVideos'];
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
