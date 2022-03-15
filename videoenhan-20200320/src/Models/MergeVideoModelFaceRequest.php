<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;

class MergeVideoModelFaceRequest extends Model
{
    /**
     * @var string
     */
    public $faceImageURL;

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
        'faceImageURL' => 'FaceImageURL',
        'templateId'   => 'TemplateId',
        'userId'       => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceImageURL) {
            $res['FaceImageURL'] = $this->faceImageURL;
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
     * @return MergeVideoModelFaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceImageURL'])) {
            $model->faceImageURL = $map['FaceImageURL'];
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
