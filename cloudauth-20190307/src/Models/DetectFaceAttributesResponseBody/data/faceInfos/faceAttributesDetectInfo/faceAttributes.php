<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponseBody\data\faceInfos\faceAttributesDetectInfo;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponseBody\data\faceInfos\faceAttributesDetectInfo\faceAttributes\headpose;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponseBody\data\faceInfos\faceAttributesDetectInfo\faceAttributes\smiling;
use AlibabaCloud\Tea\Model;

class faceAttributes extends Model
{
    /**
     * @example 0.1419367790222168
     *
     * @var float
     */
    public $blur;

    /**
     * @example 60
     *
     * @var float
     */
    public $facequal;

    /**
     * @example Face
     *
     * @var string
     */
    public $facetype;

    /**
     * @example None
     *
     * @var string
     */
    public $glasses;

    /**
     * @var headpose
     */
    public $headpose;

    /**
     * @example 70
     *
     * @var int
     */
    public $integrity;

    /**
     * @example Wear
     *
     * @var string
     */
    public $respirator;

    /**
     * @var smiling
     */
    public $smiling;
    protected $_name = [
        'blur'       => 'Blur',
        'facequal'   => 'Facequal',
        'facetype'   => 'Facetype',
        'glasses'    => 'Glasses',
        'headpose'   => 'Headpose',
        'integrity'  => 'Integrity',
        'respirator' => 'Respirator',
        'smiling'    => 'Smiling',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Headpose'] = null !== $this->headpose ? $this->headpose->toMap() : null;
        }
        if (null !== $this->integrity) {
            $res['Integrity'] = $this->integrity;
        }
        if (null !== $this->respirator) {
            $res['Respirator'] = $this->respirator;
        }
        if (null !== $this->smiling) {
            $res['Smiling'] = null !== $this->smiling ? $this->smiling->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faceAttributes
     */
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
