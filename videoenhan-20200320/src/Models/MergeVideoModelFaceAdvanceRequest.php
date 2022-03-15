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
     * @var string
     */
    public $templateId;

    /**
     * @description A short description of struct
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'faceImageURLObject' => 'FaceImageURLObject',
        'templateId'         => 'TemplateId',
        'userId'             => 'UserId',
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
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
