<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class ScalingAnalyzeResult extends Model
{
    /**
     * @var float
     */
    public $actualUsage;

    /**
     * @var float
     */
    public $idealUsage;

    /**
     * @var int
     */
    public $releaseCores;

    /**
     * @var int
     */
    public $reservedCores;
    protected $_name = [
        'actualUsage' => 'ActualUsage',
        'idealUsage' => 'IdealUsage',
        'releaseCores' => 'ReleaseCores',
        'reservedCores' => 'ReservedCores',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualUsage) {
            $res['ActualUsage'] = $this->actualUsage;
        }

        if (null !== $this->idealUsage) {
            $res['IdealUsage'] = $this->idealUsage;
        }

        if (null !== $this->releaseCores) {
            $res['ReleaseCores'] = $this->releaseCores;
        }

        if (null !== $this->reservedCores) {
            $res['ReservedCores'] = $this->reservedCores;
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
        if (isset($map['ActualUsage'])) {
            $model->actualUsage = $map['ActualUsage'];
        }

        if (isset($map['IdealUsage'])) {
            $model->idealUsage = $map['IdealUsage'];
        }

        if (isset($map['ReleaseCores'])) {
            $model->releaseCores = $map['ReleaseCores'];
        }

        if (isset($map['ReservedCores'])) {
            $model->reservedCores = $map['ReservedCores'];
        }

        return $model;
    }
}
