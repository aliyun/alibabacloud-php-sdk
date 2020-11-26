<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponse\data\faceInfos\faceAttributesDetectInfo;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponse\data\faceInfos\faceAttributesDetectInfo\faceAttributes\gender;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponse\data\faceInfos\faceAttributesDetectInfo\faceAttributes\headpose;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponse\data\faceInfos\faceAttributesDetectInfo\faceAttributes\smiling;
use AlibabaCloud\Tea\Model;

class faceAttributes extends Model
{
    /**
     * @var int
     */
    public $age;

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
     * @var string
     */
    public $ethnicity;

    /**
     * @var gender
     */
    public $gender;

    /**
     * @var smiling
     */
    public $smiling;

    /**
     * @var headpose
     */
    public $headpose;
    protected $_name = [
        'age'       => 'Age',
        'glasses'   => 'Glasses',
        'facetype'  => 'Facetype',
        'blur'      => 'Blur',
        'ethnicity' => 'Ethnicity',
        'gender'    => 'Gender',
        'smiling'   => 'Smiling',
        'headpose'  => 'Headpose',
    ];

    public function validate()
    {
        Model::validateRequired('age', $this->age, true);
        Model::validateRequired('glasses', $this->glasses, true);
        Model::validateRequired('facetype', $this->facetype, true);
        Model::validateRequired('blur', $this->blur, true);
        Model::validateRequired('ethnicity', $this->ethnicity, true);
        Model::validateRequired('gender', $this->gender, true);
        Model::validateRequired('smiling', $this->smiling, true);
        Model::validateRequired('headpose', $this->headpose, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->age) {
            $res['Age'] = $this->age;
        }
        if (null !== $this->glasses) {
            $res['Glasses'] = $this->glasses;
        }
        if (null !== $this->facetype) {
            $res['Facetype'] = $this->facetype;
        }
        if (null !== $this->blur) {
            $res['Blur'] = $this->blur;
        }
        if (null !== $this->ethnicity) {
            $res['Ethnicity'] = $this->ethnicity;
        }
        if (null !== $this->gender) {
            $res['Gender'] = null !== $this->gender ? $this->gender->toMap() : null;
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
        if (isset($map['Age'])) {
            $model->age = $map['Age'];
        }
        if (isset($map['Glasses'])) {
            $model->glasses = $map['Glasses'];
        }
        if (isset($map['Facetype'])) {
            $model->facetype = $map['Facetype'];
        }
        if (isset($map['Blur'])) {
            $model->blur = $map['Blur'];
        }
        if (isset($map['Ethnicity'])) {
            $model->ethnicity = $map['Ethnicity'];
        }
        if (isset($map['Gender'])) {
            $model->gender = gender::fromMap($map['Gender']);
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
