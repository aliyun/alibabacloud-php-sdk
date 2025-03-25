<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenLCResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenLCResponseBody\data\lesion\lesionList;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenLCResponseBody\data\lesion\patientLevelResult;

class lesion extends Model
{
    /**
     * @var lesionList[]
     */
    public $lesionList;

    /**
     * @var float
     */
    public $liverVolume;

    /**
     * @var string
     */
    public $mask;

    /**
     * @var patientLevelResult
     */
    public $patientLevelResult;
    protected $_name = [
        'lesionList' => 'LesionList',
        'liverVolume' => 'LiverVolume',
        'mask' => 'Mask',
        'patientLevelResult' => 'PatientLevelResult',
    ];

    public function validate()
    {
        if (\is_array($this->lesionList)) {
            Model::validateArray($this->lesionList);
        }
        if (null !== $this->patientLevelResult) {
            $this->patientLevelResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lesionList) {
            if (\is_array($this->lesionList)) {
                $res['LesionList'] = [];
                $n1 = 0;
                foreach ($this->lesionList as $item1) {
                    $res['LesionList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->liverVolume) {
            $res['LiverVolume'] = $this->liverVolume;
        }

        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }

        if (null !== $this->patientLevelResult) {
            $res['PatientLevelResult'] = null !== $this->patientLevelResult ? $this->patientLevelResult->toArray($noStream) : $this->patientLevelResult;
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
        if (isset($map['LesionList'])) {
            if (!empty($map['LesionList'])) {
                $model->lesionList = [];
                $n1 = 0;
                foreach ($map['LesionList'] as $item1) {
                    $model->lesionList[$n1++] = lesionList::fromMap($item1);
                }
            }
        }

        if (isset($map['LiverVolume'])) {
            $model->liverVolume = $map['LiverVolume'];
        }

        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }

        if (isset($map['PatientLevelResult'])) {
            $model->patientLevelResult = patientLevelResult::fromMap($map['PatientLevelResult']);
        }

        return $model;
    }
}
