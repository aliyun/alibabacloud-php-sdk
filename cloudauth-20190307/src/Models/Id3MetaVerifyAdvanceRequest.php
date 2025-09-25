<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class Id3MetaVerifyAdvanceRequest extends Model
{
    /**
     * @var string
     */
    public $crop;

    /**
     * @var Stream
     */
    public $faceFileObject;

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
        'faceFileObject' => 'FaceFile',
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

        if (null !== $this->faceFileObject) {
            $res['FaceFile'] = $this->faceFileObject;
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
            $model->faceFileObject = $map['FaceFile'];
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
