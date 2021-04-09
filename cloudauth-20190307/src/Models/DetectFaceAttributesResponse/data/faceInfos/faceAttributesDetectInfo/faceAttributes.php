<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponse\data\faceInfos\faceAttributesDetectInfo;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponse\data\faceInfos\faceAttributesDetectInfo\faceAttributes\headpose;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponse\data\faceInfos\faceAttributesDetectInfo\faceAttributes\smiling;
use AlibabaCloud\Tea\Model;

class faceAttributes extends Model
{
    /**
     * @var string
     */
    public $glasses;

    /**
     * @var string
     */
    public $facetype;

    /**
     * @var float
     */
    public $blur;

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
    public $respirator;

    /**
     * @var float
     */
    public $appearanceScore;

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
        'facetype'        => 'Facetype',
        'blur'            => 'Blur',
        'facequal'        => 'Facequal',
        'integrity'       => 'Integrity',
        'respirator'      => 'Respirator',
        'appearanceScore' => 'AppearanceScore',
        'smiling'         => 'Smiling',
        'headpose'        => 'Headpose',
    ];

    public function validate()
    {
        Model::validateRequired('glasses', $this->glasses, true);
        Model::validateRequired('facetype', $this->facetype, true);
        Model::validateRequired('blur', $this->blur, true);
        Model::validateRequired('facequal', $this->facequal, true);
        Model::validateRequired('integrity', $this->integrity, true);
        Model::validateRequired('respirator', $this->respirator, true);
        Model::validateRequired('appearanceScore', $this->appearanceScore, true);
        Model::validateRequired('smiling', $this->smiling, true);
        Model::validateRequired('headpose', $this->headpose, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->glasses) {
            $res['Glasses'] = $this->glasses;
        }
        if (null !== $this->facetype) {
            $res['Facetype'] = $this->facetype;
        }
        if (null !== $this->blur) {
            $res['Blur'] = $this->blur;
        }
        if (null !== $this->facequal) {
            $res['Facequal'] = $this->facequal;
        }
        if (null !== $this->integrity) {
            $res['Integrity'] = $this->integrity;
        }
        if (null !== $this->respirator) {
            $res['Respirator'] = $this->respirator;
        }
        if (null !== $this->appearanceScore) {
            $res['AppearanceScore'] = $this->appearanceScore;
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
        if (isset($map['Facetype'])) {
            $model->facetype = $map['Facetype'];
        }
        if (isset($map['Blur'])) {
            $model->blur = $map['Blur'];
        }
        if (isset($map['Facequal'])) {
            $model->facequal = $map['Facequal'];
        }
        if (isset($map['Integrity'])) {
            $model->integrity = $map['Integrity'];
        }
        if (isset($map['Respirator'])) {
            $model->respirator = $map['Respirator'];
        }
        if (isset($map['AppearanceScore'])) {
            $model->appearanceScore = $map['AppearanceScore'];
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
