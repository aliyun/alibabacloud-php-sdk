<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponseBody\data\faceInfos\faceAttributesDetectInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponseBody\data\faceInfos\faceAttributesDetectInfo\faceAttributes\headpose;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponseBody\data\faceInfos\faceAttributesDetectInfo\faceAttributes\smiling;

class faceAttributes extends Model
{
    /**
     * @var float
     */
    public $blur;

    /**
     * @var float
     */
    public $facequal;

    /**
     * @var string
     */
    public $facetype;

    /**
     * @var string
     */
    public $glasses;

    /**
     * @var headpose
     */
    public $headpose;

    /**
     * @var int
     */
    public $integrity;

    /**
     * @var string
     */
    public $respirator;

    /**
     * @var smiling
     */
    public $smiling;
    protected $_name = [
        'blur' => 'Blur',
        'facequal' => 'Facequal',
        'facetype' => 'Facetype',
        'glasses' => 'Glasses',
        'headpose' => 'Headpose',
        'integrity' => 'Integrity',
        'respirator' => 'Respirator',
        'smiling' => 'Smiling',
    ];

    public function validate()
    {
        if (null !== $this->headpose) {
            $this->headpose->validate();
        }
        if (null !== $this->smiling) {
            $this->smiling->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blur) {
            $res['Blur'] = $this->blur;
        }

        if (null !== $this->facequal) {
            $res['Facequal'] = $this->facequal;
        }

        if (null !== $this->facetype) {
            $res['Facetype'] = $this->facetype;
        }

        if (null !== $this->glasses) {
            $res['Glasses'] = $this->glasses;
        }

        if (null !== $this->headpose) {
            $res['Headpose'] = null !== $this->headpose ? $this->headpose->toArray($noStream) : $this->headpose;
        }

        if (null !== $this->integrity) {
            $res['Integrity'] = $this->integrity;
        }

        if (null !== $this->respirator) {
            $res['Respirator'] = $this->respirator;
        }

        if (null !== $this->smiling) {
            $res['Smiling'] = null !== $this->smiling ? $this->smiling->toArray($noStream) : $this->smiling;
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
        if (isset($map['Blur'])) {
            $model->blur = $map['Blur'];
        }

        if (isset($map['Facequal'])) {
            $model->facequal = $map['Facequal'];
        }

        if (isset($map['Facetype'])) {
            $model->facetype = $map['Facetype'];
        }

        if (isset($map['Glasses'])) {
            $model->glasses = $map['Glasses'];
        }

        if (isset($map['Headpose'])) {
            $model->headpose = headpose::fromMap($map['Headpose']);
        }

        if (isset($map['Integrity'])) {
            $model->integrity = $map['Integrity'];
        }

        if (isset($map['Respirator'])) {
            $model->respirator = $map['Respirator'];
        }

        if (isset($map['Smiling'])) {
            $model->smiling = smiling::fromMap($map['Smiling']);
        }

        return $model;
    }
}
