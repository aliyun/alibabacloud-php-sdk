<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\BeautifyBodyAdvanceRequest;

use AlibabaCloud\Tea\Model;

class ageRange extends Model
{
    /**
     * @var int
     */
    public $ageMinimum;

    /**
     * @var int
     */
    public $ageMax;
    protected $_name = [
        'ageMinimum' => 'AgeMinimum',
        'ageMax'     => 'AgeMax',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ageMinimum) {
            $res['AgeMinimum'] = $this->ageMinimum;
        }
        if (null !== $this->ageMax) {
            $res['AgeMax'] = $this->ageMax;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ageRange
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgeMinimum'])) {
            $model->ageMinimum = $map['AgeMinimum'];
        }
        if (isset($map['AgeMax'])) {
            $model->ageMax = $map['AgeMax'];
        }

        return $model;
    }
}
