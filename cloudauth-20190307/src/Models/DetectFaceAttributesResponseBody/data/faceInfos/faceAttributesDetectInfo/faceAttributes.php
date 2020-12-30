<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponseBody\data\faceInfos\faceAttributesDetectInfo;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponseBody\data\faceInfos\faceAttributesDetectInfo\faceAttributes\headpose;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponseBody\data\faceInfos\faceAttributesDetectInfo\faceAttributes\smiling;
use AlibabaCloud\Tea\Model;

class faceAttributes extends Model
{
    /**
     * @var string
     */
    public $glasses;

    /**
     * @var float
     */
    public $facequal;

    /**
     * @var int
     */
    public $integrity;

    /**
     * @var smiling
     */
    public $smiling;

    /**
     * @var string
     */
    public $facetype;

    /**
     * @var string
     */
    public $respirator;

    /**
     * @var headpose
     */
    public $headpose;

    /**
     * @var float
     */
    public $blur;
    protected $_name = [
        'glasses'    => 'Glasses',
        'facequal'   => 'Facequal',
        'integrity'  => 'Integrity',
        'smiling'    => 'Smiling',
        'facetype'   => 'Facetype',
        'respirator' => 'Respirator',
        'headpose'   => 'Headpose',
        'blur'       => 'Blur',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->glasses) {
            $res['Glasses'] = $this->glasses;
        }
        if (null !== $this->facequal) {
            $res['Facequal'] = $this->facequal;
        }
        if (null !== $this->integrity) {
            $res['Integrity'] = $this->integrity;
        }
        if (null !== $this->smiling) {
            $res['Smiling'] = null !== $this->smiling ? $this->smiling->toMap() : null;
        }
        if (null !== $this->facetype) {
            $res['Facetype'] = $this->facetype;
        }
        if (null !== $this->respirator) {
            $res['Respirator'] = $this->respirator;
        }
        if (null !== $this->headpose) {
            $res['Headpose'] = null !== $this->headpose ? $this->headpose->toMap() : null;
        }
        if (null !== $this->blur) {
            $res['Blur'] = $this->blur;
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
        if (isset($map['Glasses'])) {
            $model->glasses = $map['Glasses'];
        }
        if (isset($map['Facequal'])) {
            $model->facequal = $map['Facequal'];
        }
        if (isset($map['Integrity'])) {
            $model->integrity = $map['Integrity'];
        }
        if (isset($map['Smiling'])) {
            $model->smiling = smiling::fromMap($map['Smiling']);
        }
        if (isset($map['Facetype'])) {
            $model->facetype = $map['Facetype'];
        }
        if (isset($map['Respirator'])) {
            $model->respirator = $map['Respirator'];
        }
        if (isset($map['Headpose'])) {
            $model->headpose = headpose::fromMap($map['Headpose']);
        }
        if (isset($map['Blur'])) {
            $model->blur = $map['Blur'];
        }

        return $model;
    }
}
