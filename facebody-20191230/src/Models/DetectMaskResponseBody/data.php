<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\DetectMaskResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $faceProbability;

    /**
     * @var int
     */
    public $mask;
    protected $_name = [
        'faceProbability' => 'FaceProbability',
        'mask'            => 'Mask',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceProbability) {
            $res['FaceProbability'] = $this->faceProbability;
        }
        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
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
        if (isset($map['FaceProbability'])) {
            $model->faceProbability = $map['FaceProbability'];
        }
        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }

        return $model;
    }
}
