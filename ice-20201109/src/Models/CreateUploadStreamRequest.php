<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class CreateUploadStreamRequest extends Model
{
    /**
     * @var string
     */
    public $definition;
    /**
     * @var string
     */
    public $fileExtension;
    /**
     * @var string
     */
    public $HDRType;
    /**
     * @var string
     */
    public $mediaId;
    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'definition'    => 'Definition',
        'fileExtension' => 'FileExtension',
        'HDRType'       => 'HDRType',
        'mediaId'       => 'MediaId',
        'userData'      => 'UserData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }

        if (null !== $this->fileExtension) {
            $res['FileExtension'] = $this->fileExtension;
        }

        if (null !== $this->HDRType) {
            $res['HDRType'] = $this->HDRType;
        }

        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }

        if (isset($map['FileExtension'])) {
            $model->fileExtension = $map['FileExtension'];
        }

        if (isset($map['HDRType'])) {
            $model->HDRType = $map['HDRType'];
        }

        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
