<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class MergeVideoModelFaceAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $faceImageURLObject;

    /**
     * @description A short description of struct
     *
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'faceImageURLObject' => 'FaceImageURLObject',
        'userId'             => 'UserId',
        'templateId'         => 'TemplateId',
    ];

    public function validate()
    {
        Model::validateRequired('faceImageURLObject', $this->faceImageURLObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceImageURLObject) {
            $res['FaceImageURLObject'] = $this->faceImageURLObject;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MergeVideoModelFaceAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceImageURLObject'])) {
            $model->faceImageURLObject = $map['FaceImageURLObject'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
