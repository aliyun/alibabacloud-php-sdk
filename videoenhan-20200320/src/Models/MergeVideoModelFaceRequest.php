<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;

class MergeVideoModelFaceRequest extends Model
{
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

    /**
     * @var string
     */
    public $faceImageURL;
    protected $_name = [
        'userId'       => 'UserId',
        'templateId'   => 'TemplateId',
        'faceImageURL' => 'FaceImageURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->faceImageURL) {
            $res['FaceImageURL'] = $this->faceImageURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MergeVideoModelFaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['FaceImageURL'])) {
            $model->faceImageURL = $map['FaceImageURL'];
        }

        return $model;
    }
}
