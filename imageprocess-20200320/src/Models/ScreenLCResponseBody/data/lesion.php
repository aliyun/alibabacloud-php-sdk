<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenLCResponseBody\data;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenLCResponseBody\data\lesion\lesionList;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenLCResponseBody\data\lesion\patientLevelResult;
use AlibabaCloud\Tea\Model;

class lesion extends Model
{
    /**
     * @var lesionList[]
     */
    public $lesionList;

    /**
     * @example 1364.9468
     *
     * @var float
     */
    public $liverVolume;

    /**
     * @example 20-050_0000.nii.gz
     *
     * @var string
     */
    public $mask;

    /**
     * @var patientLevelResult
     */
    public $patientLevelResult;
    protected $_name = [
        'lesionList'         => 'LesionList',
        'liverVolume'        => 'LiverVolume',
        'mask'               => 'Mask',
        'patientLevelResult' => 'PatientLevelResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lesionList) {
            $res['LesionList'] = [];
            if (null !== $this->lesionList && \is_array($this->lesionList)) {
                $n = 0;
                foreach ($this->lesionList as $item) {
                    $res['LesionList'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['PatientLevelResult'] = null !== $this->patientLevelResult ? $this->patientLevelResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lesion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LesionList'])) {
            if (!empty($map['LesionList'])) {
                $model->lesionList = [];
                $n                 = 0;
                foreach ($map['LesionList'] as $item) {
                    $model->lesionList[$n++] = null !== $item ? lesionList::fromMap($item) : $item;
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
