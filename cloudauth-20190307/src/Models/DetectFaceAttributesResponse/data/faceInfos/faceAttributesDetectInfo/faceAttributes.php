<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponse\data\faceInfos\faceAttributesDetectInfo;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponse\data\faceInfos\faceAttributesDetectInfo\faceAttributes\headpose;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponse\data\faceInfos\faceAttributesDetectInfo\faceAttributes\smiling;
use AlibabaCloud\Tea\Model;

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
     * @var int
     */
    public $integrity;

    /**
     * @var string
     */
    public $respirator;

    /**
     * @var headpose
     */
    public $headpose;

    /**
     * @var smiling
     */
    public $smiling;
    protected $_name = [
        'blur'       => 'Blur',
        'facequal'   => 'Facequal',
        'facetype'   => 'Facetype',
        'glasses'    => 'Glasses',
        'integrity'  => 'Integrity',
        'respirator' => 'Respirator',
        'headpose'   => 'Headpose',
        'smiling'    => 'Smiling',
    ];

    public function validate()
    {
        Model::validateRequired('blur', $this->blur, true);
        Model::validateRequired('facequal', $this->facequal, true);
        Model::validateRequired('facetype', $this->facetype, true);
        Model::validateRequired('glasses', $this->glasses, true);
        Model::validateRequired('integrity', $this->integrity, true);
        Model::validateRequired('respirator', $this->respirator, true);
        Model::validateRequired('headpose', $this->headpose, true);
        Model::validateRequired('smiling', $this->smiling, true);
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
        if (null !== $this->integrity) {
            $res['Integrity'] = $this->integrity;
        }
        if (null !== $this->respirator) {
            $res['Respirator'] = $this->respirator;
        }
        if (null !== $this->headpose) {
            $res['Headpose'] = null !== $this->headpose ? $this->headpose->toMap() : null;
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
        if (isset($map['Integrity'])) {
            $model->integrity = $map['Integrity'];
        }
        if (isset($map['Respirator'])) {
            $model->respirator = $map['Respirator'];
        }
        if (isset($map['Headpose'])) {
            $model->headpose = headpose::fromMap($map['Headpose']);
        }
        if (isset($map['Smiling'])) {
            $model->smiling = smiling::fromMap($map['Smiling']);
        }

        return $model;
    }
}
