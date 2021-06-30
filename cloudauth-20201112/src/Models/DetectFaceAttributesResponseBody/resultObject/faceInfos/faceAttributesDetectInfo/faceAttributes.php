<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20201112\Models\DetectFaceAttributesResponseBody\resultObject\faceInfos\faceAttributesDetectInfo;

use AlibabaCloud\SDK\Cloudauth\V20201112\Models\DetectFaceAttributesResponseBody\resultObject\faceInfos\faceAttributesDetectInfo\faceAttributes\headpose;
use AlibabaCloud\SDK\Cloudauth\V20201112\Models\DetectFaceAttributesResponseBody\resultObject\faceInfos\faceAttributesDetectInfo\faceAttributes\smiling;
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
     * @var string
     */
    public $facetype;

    /**
     * @var string
     */
    public $respirator;

    /**
     * @var float
     */
    public $appearanceScore;

    /**
     * @var float
     */
    public $blur;

    /**
     * @var smiling
     */
    public $smiling;

    /**
     * @var headpose
     */
    public $headpose;
    protected $_name = [
        'glasses'         => 'Glasses',
        'facequal'        => 'Facequal',
        'integrity'       => 'Integrity',
        'facetype'        => 'Facetype',
        'respirator'      => 'Respirator',
        'appearanceScore' => 'AppearanceScore',
        'blur'            => 'Blur',
        'smiling'         => 'Smiling',
        'headpose'        => 'Headpose',
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
        if (null !== $this->facetype) {
            $res['Facetype'] = $this->facetype;
        }
        if (null !== $this->respirator) {
            $res['Respirator'] = $this->respirator;
        }
        if (null !== $this->appearanceScore) {
            $res['AppearanceScore'] = $this->appearanceScore;
        }
        if (null !== $this->blur) {
            $res['Blur'] = $this->blur;
        }
        if (null !== $this->smiling) {
            $res['Smiling'] = null !== $this->smiling ? $this->smiling->toMap() : null;
        }
        if (null !== $this->headpose) {
            $res['Headpose'] = null !== $this->headpose ? $this->headpose->toMap() : null;
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
        if (isset($map['Facetype'])) {
            $model->facetype = $map['Facetype'];
        }
        if (isset($map['Respirator'])) {
            $model->respirator = $map['Respirator'];
        }
        if (isset($map['AppearanceScore'])) {
            $model->appearanceScore = $map['AppearanceScore'];
        }
        if (isset($map['Blur'])) {
            $model->blur = $map['Blur'];
        }
        if (isset($map['Smiling'])) {
            $model->smiling = smiling::fromMap($map['Smiling']);
        }
        if (isset($map['Headpose'])) {
            $model->headpose = headpose::fromMap($map['Headpose']);
        }

        return $model;
    }
}
