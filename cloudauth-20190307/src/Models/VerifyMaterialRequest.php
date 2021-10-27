<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class VerifyMaterialRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $faceImageUrl;

    /**
     * @var string
     */
    public $idCardBackImageUrl;

    /**
     * @var string
     */
    public $idCardFrontImageUrl;

    /**
     * @var string
     */
    public $idCardNumber;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'bizId'               => 'BizId',
        'bizType'             => 'BizType',
        'faceImageUrl'        => 'FaceImageUrl',
        'idCardBackImageUrl'  => 'IdCardBackImageUrl',
        'idCardFrontImageUrl' => 'IdCardFrontImageUrl',
        'idCardNumber'        => 'IdCardNumber',
        'name'                => 'Name',
        'userId'              => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->faceImageUrl) {
            $res['FaceImageUrl'] = $this->faceImageUrl;
        }
        if (null !== $this->idCardBackImageUrl) {
            $res['IdCardBackImageUrl'] = $this->idCardBackImageUrl;
        }
        if (null !== $this->idCardFrontImageUrl) {
            $res['IdCardFrontImageUrl'] = $this->idCardFrontImageUrl;
        }
        if (null !== $this->idCardNumber) {
            $res['IdCardNumber'] = $this->idCardNumber;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyMaterialRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['FaceImageUrl'])) {
            $model->faceImageUrl = $map['FaceImageUrl'];
        }
        if (isset($map['IdCardBackImageUrl'])) {
            $model->idCardBackImageUrl = $map['IdCardBackImageUrl'];
        }
        if (isset($map['IdCardFrontImageUrl'])) {
            $model->idCardFrontImageUrl = $map['IdCardFrontImageUrl'];
        }
        if (isset($map['IdCardNumber'])) {
            $model->idCardNumber = $map['IdCardNumber'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
