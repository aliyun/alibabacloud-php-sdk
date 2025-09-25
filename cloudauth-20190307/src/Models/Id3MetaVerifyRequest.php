<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;

class Id3MetaVerifyRequest extends Model
{
    /**
     * @var string
     */
    public $crop;

    /**
     * @var string
     */
    public $faceFile;

    /**
     * @var string
     */
    public $faceUrl;

    /**
     * @var string
     */
    public $identifyNum;

    /**
     * @var string
     */
    public $paramType;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'crop' => 'Crop',
        'faceFile' => 'FaceFile',
        'faceUrl' => 'FaceUrl',
        'identifyNum' => 'IdentifyNum',
        'paramType' => 'ParamType',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->crop) {
            $res['Crop'] = $this->crop;
        }

        if (null !== $this->faceFile) {
            $res['FaceFile'] = $this->faceFile;
        }

        if (null !== $this->faceUrl) {
            $res['FaceUrl'] = $this->faceUrl;
        }

        if (null !== $this->identifyNum) {
            $res['IdentifyNum'] = $this->identifyNum;
        }

        if (null !== $this->paramType) {
            $res['ParamType'] = $this->paramType;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['Crop'])) {
            $model->crop = $map['Crop'];
        }

        if (isset($map['FaceFile'])) {
            $model->faceFile = $map['FaceFile'];
        }

        if (isset($map['FaceUrl'])) {
            $model->faceUrl = $map['FaceUrl'];
        }

        if (isset($map['IdentifyNum'])) {
            $model->identifyNum = $map['IdentifyNum'];
        }

        if (isset($map['ParamType'])) {
            $model->paramType = $map['ParamType'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
