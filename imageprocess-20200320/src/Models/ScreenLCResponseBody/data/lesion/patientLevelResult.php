<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenLCResponseBody\data\lesion;

use AlibabaCloud\Tea\Model;

class patientLevelResult extends Model
{
    /**
     * @example 0.0077
     *
     * @var string
     */
    public $benignNonCystProb;

    /**
     * @example 0.9233
     *
     * @var float
     */
    public $cystProb;

    /**
     * @example 0.9941
     *
     * @var float
     */
    public $HCCProb;

    /**
     * @example 0.0073
     *
     * @var float
     */
    public $malignantNonHCCProb;
    protected $_name = [
        'benignNonCystProb'   => 'BenignNonCystProb',
        'cystProb'            => 'CystProb',
        'HCCProb'             => 'HCCProb',
        'malignantNonHCCProb' => 'MalignantNonHCCProb',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->benignNonCystProb) {
            $res['BenignNonCystProb'] = $this->benignNonCystProb;
        }
        if (null !== $this->cystProb) {
            $res['CystProb'] = $this->cystProb;
        }
        if (null !== $this->HCCProb) {
            $res['HCCProb'] = $this->HCCProb;
        }
        if (null !== $this->malignantNonHCCProb) {
            $res['MalignantNonHCCProb'] = $this->malignantNonHCCProb;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return patientLevelResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BenignNonCystProb'])) {
            $model->benignNonCystProb = $map['BenignNonCystProb'];
        }
        if (isset($map['CystProb'])) {
            $model->cystProb = $map['CystProb'];
        }
        if (isset($map['HCCProb'])) {
            $model->HCCProb = $map['HCCProb'];
        }
        if (isset($map['MalignantNonHCCProb'])) {
            $model->malignantNonHCCProb = $map['MalignantNonHCCProb'];
        }

        return $model;
    }
}
