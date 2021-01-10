<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\RegisterMediaDetailPersonResponseBody\registeredPersonages;

use AlibabaCloud\SDK\Mts\V20140618\Models\RegisterMediaDetailPersonResponseBody\registeredPersonages\registeredPersonage\imageFile;
use AlibabaCloud\Tea\Model;

class registeredPersonage extends Model
{
    /**
     * @var string
     */
    public $personName;

    /**
     * @var string
     */
    public $faceId;

    /**
     * @var string
     */
    public $target;

    /**
     * @var string
     */
    public $quality;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var imageFile
     */
    public $imageFile;
    protected $_name = [
        'personName' => 'PersonName',
        'faceId'     => 'FaceId',
        'target'     => 'Target',
        'quality'    => 'Quality',
        'gender'     => 'Gender',
        'imageId'    => 'ImageId',
        'imageFile'  => 'ImageFile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->personName) {
            $res['PersonName'] = $this->personName;
        }
        if (null !== $this->faceId) {
            $res['FaceId'] = $this->faceId;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->quality) {
            $res['Quality'] = $this->quality;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageFile) {
            $res['ImageFile'] = null !== $this->imageFile ? $this->imageFile->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return registeredPersonage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PersonName'])) {
            $model->personName = $map['PersonName'];
        }
        if (isset($map['FaceId'])) {
            $model->faceId = $map['FaceId'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['Quality'])) {
            $model->quality = $map['Quality'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageFile'])) {
            $model->imageFile = imageFile::fromMap($map['ImageFile']);
        }

        return $model;
    }
}
