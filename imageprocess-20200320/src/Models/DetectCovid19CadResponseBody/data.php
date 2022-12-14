<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectCovid19CadResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 0.9387283236994219
     *
     * @var string
     */
    public $lesionRatio;

    /**
     * @example http://algo-app-aic-med-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/covid19-dcm/unspecified/2020032702/1b1e1018-6fcf-11ea-8fa1-d20b34387541.nii.gz?Expires=1585276394&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=%2F1LNGWJUqvY0VRYGgg8Ldtb3BF****
     *
     * @var string
     */
    public $mask;

    /**
     * @example 4.062644e-06
     *
     * @var string
     */
    public $newProbability;

    /**
     * @example 0.7230905
     *
     * @var string
     */
    public $normalProbability;

    /**
     * @example 0.27690542
     *
     * @var string
     */
    public $otherProbability;
    protected $_name = [
        'lesionRatio'       => 'LesionRatio',
        'mask'              => 'Mask',
        'newProbability'    => 'NewProbability',
        'normalProbability' => 'NormalProbability',
        'otherProbability'  => 'OtherProbability',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lesionRatio) {
            $res['LesionRatio'] = $this->lesionRatio;
        }
        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }
        if (null !== $this->newProbability) {
            $res['NewProbability'] = $this->newProbability;
        }
        if (null !== $this->normalProbability) {
            $res['NormalProbability'] = $this->normalProbability;
        }
        if (null !== $this->otherProbability) {
            $res['OtherProbability'] = $this->otherProbability;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LesionRatio'])) {
            $model->lesionRatio = $map['LesionRatio'];
        }
        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }
        if (isset($map['NewProbability'])) {
            $model->newProbability = $map['NewProbability'];
        }
        if (isset($map['NormalProbability'])) {
            $model->normalProbability = $map['NormalProbability'];
        }
        if (isset($map['OtherProbability'])) {
            $model->otherProbability = $map['OtherProbability'];
        }

        return $model;
    }
}
