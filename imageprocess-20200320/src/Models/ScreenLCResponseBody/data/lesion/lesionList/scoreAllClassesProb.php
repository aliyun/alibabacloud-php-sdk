<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenLCResponseBody\data\lesion\lesionList;

use AlibabaCloud\Dara\Model;

class scoreAllClassesProb extends Model
{
    /**
     * @var float
     */
    public $benignProb;

    /**
     * @var float
     */
    public $calcProb;

    /**
     * @var float
     */
    public $cystProb;

    /**
     * @var float
     */
    public $malignantProb;
    protected $_name = [
        'benignProb' => 'BenignProb',
        'calcProb' => 'CalcProb',
        'cystProb' => 'CystProb',
        'malignantProb' => 'MalignantProb',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->benignProb) {
            $res['BenignProb'] = $this->benignProb;
        }

        if (null !== $this->calcProb) {
            $res['CalcProb'] = $this->calcProb;
        }

        if (null !== $this->cystProb) {
            $res['CystProb'] = $this->cystProb;
        }

        if (null !== $this->malignantProb) {
            $res['MalignantProb'] = $this->malignantProb;
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
        if (isset($map['BenignProb'])) {
            $model->benignProb = $map['BenignProb'];
        }

        if (isset($map['CalcProb'])) {
            $model->calcProb = $map['CalcProb'];
        }

        if (isset($map['CystProb'])) {
            $model->cystProb = $map['CystProb'];
        }

        if (isset($map['MalignantProb'])) {
            $model->malignantProb = $map['MalignantProb'];
        }

        return $model;
    }
}
