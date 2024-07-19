<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class AnchorResponse extends Model
{
    /**
     * @var string
     */
    public $anchorId;

    /**
     * @var string
     */
    public $anchorMaterialName;

    /**
     * @var string
     */
    public $anchorType;

    /**
     * @var int
     */
    public $coverHeight;

    /**
     * @var string
     */
    public $coverRate;

    /**
     * @var string
     */
    public $coverThumbnailUrl;

    /**
     * @var string
     */
    public $coverUrl;

    /**
     * @var int
     */
    public $coverWeight;

    /**
     * @var string
     */
    public $digitalHumanType;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    public $resourceTypeDesc;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $useScene;
    protected $_name = [
        'anchorId'           => 'anchorId',
        'anchorMaterialName' => 'anchorMaterialName',
        'anchorType'         => 'anchorType',
        'coverHeight'        => 'coverHeight',
        'coverRate'          => 'coverRate',
        'coverThumbnailUrl'  => 'coverThumbnailUrl',
        'coverUrl'           => 'coverUrl',
        'coverWeight'        => 'coverWeight',
        'digitalHumanType'   => 'digitalHumanType',
        'gender'             => 'gender',
        'resourceTypeDesc'   => 'resourceTypeDesc',
        'status'             => 'status',
        'useScene'           => 'useScene',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->anchorId) {
            $res['anchorId'] = $this->anchorId;
        }
        if (null !== $this->anchorMaterialName) {
            $res['anchorMaterialName'] = $this->anchorMaterialName;
        }
        if (null !== $this->anchorType) {
            $res['anchorType'] = $this->anchorType;
        }
        if (null !== $this->coverHeight) {
            $res['coverHeight'] = $this->coverHeight;
        }
        if (null !== $this->coverRate) {
            $res['coverRate'] = $this->coverRate;
        }
        if (null !== $this->coverThumbnailUrl) {
            $res['coverThumbnailUrl'] = $this->coverThumbnailUrl;
        }
        if (null !== $this->coverUrl) {
            $res['coverUrl'] = $this->coverUrl;
        }
        if (null !== $this->coverWeight) {
            $res['coverWeight'] = $this->coverWeight;
        }
        if (null !== $this->digitalHumanType) {
            $res['digitalHumanType'] = $this->digitalHumanType;
        }
        if (null !== $this->gender) {
            $res['gender'] = $this->gender;
        }
        if (null !== $this->resourceTypeDesc) {
            $res['resourceTypeDesc'] = $this->resourceTypeDesc;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->useScene) {
            $res['useScene'] = $this->useScene;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AnchorResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['anchorId'])) {
            $model->anchorId = $map['anchorId'];
        }
        if (isset($map['anchorMaterialName'])) {
            $model->anchorMaterialName = $map['anchorMaterialName'];
        }
        if (isset($map['anchorType'])) {
            $model->anchorType = $map['anchorType'];
        }
        if (isset($map['coverHeight'])) {
            $model->coverHeight = $map['coverHeight'];
        }
        if (isset($map['coverRate'])) {
            $model->coverRate = $map['coverRate'];
        }
        if (isset($map['coverThumbnailUrl'])) {
            $model->coverThumbnailUrl = $map['coverThumbnailUrl'];
        }
        if (isset($map['coverUrl'])) {
            $model->coverUrl = $map['coverUrl'];
        }
        if (isset($map['coverWeight'])) {
            $model->coverWeight = $map['coverWeight'];
        }
        if (isset($map['digitalHumanType'])) {
            $model->digitalHumanType = $map['digitalHumanType'];
        }
        if (isset($map['gender'])) {
            $model->gender = $map['gender'];
        }
        if (isset($map['resourceTypeDesc'])) {
            $model->resourceTypeDesc = $map['resourceTypeDesc'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['useScene'])) {
            $model->useScene = $map['useScene'];
        }

        return $model;
    }
}
