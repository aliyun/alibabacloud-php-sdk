<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240118\Models;

use AlibabaCloud\Tea\Model;

class SyncDigitalHumanVideoCmd extends Model
{
    /**
     * @example 60
     *
     * @var string
     */
    public $accountId;

    /**
     * @example DELETE
     *
     * @var string
     */
    public $actionType;

    /**
     * @example 28274623764834
     *
     * @var string
     */
    public $idempotentId;

    /**
     * @var string
     */
    public $imageScale;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var int
     */
    public $videoDuration;

    /**
     * @example 123123424
     *
     * @var string
     */
    public $videoId;

    /**
     * @var string
     */
    public $videoTitle;

    /**
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'accountId'     => 'accountId',
        'actionType'    => 'actionType',
        'idempotentId'  => 'idempotentId',
        'imageScale'    => 'imageScale',
        'imageUrl'      => 'imageUrl',
        'videoDuration' => 'videoDuration',
        'videoId'       => 'videoId',
        'videoTitle'    => 'videoTitle',
        'videoUrl'      => 'videoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }
        if (null !== $this->actionType) {
            $res['actionType'] = $this->actionType;
        }
        if (null !== $this->idempotentId) {
            $res['idempotentId'] = $this->idempotentId;
        }
        if (null !== $this->imageScale) {
            $res['imageScale'] = $this->imageScale;
        }
        if (null !== $this->imageUrl) {
            $res['imageUrl'] = $this->imageUrl;
        }
        if (null !== $this->videoDuration) {
            $res['videoDuration'] = $this->videoDuration;
        }
        if (null !== $this->videoId) {
            $res['videoId'] = $this->videoId;
        }
        if (null !== $this->videoTitle) {
            $res['videoTitle'] = $this->videoTitle;
        }
        if (null !== $this->videoUrl) {
            $res['videoUrl'] = $this->videoUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SyncDigitalHumanVideoCmd
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }
        if (isset($map['actionType'])) {
            $model->actionType = $map['actionType'];
        }
        if (isset($map['idempotentId'])) {
            $model->idempotentId = $map['idempotentId'];
        }
        if (isset($map['imageScale'])) {
            $model->imageScale = $map['imageScale'];
        }
        if (isset($map['imageUrl'])) {
            $model->imageUrl = $map['imageUrl'];
        }
        if (isset($map['videoDuration'])) {
            $model->videoDuration = $map['videoDuration'];
        }
        if (isset($map['videoId'])) {
            $model->videoId = $map['videoId'];
        }
        if (isset($map['videoTitle'])) {
            $model->videoTitle = $map['videoTitle'];
        }
        if (isset($map['videoUrl'])) {
            $model->videoUrl = $map['videoUrl'];
        }

        return $model;
    }
}
