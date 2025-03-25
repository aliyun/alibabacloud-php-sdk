<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectPancResponseBody\data;

use AlibabaCloud\Dara\Model;

class lesion extends Model
{
    /**
     * @var string
     */
    public $mask;

    /**
     * @var string
     */
    public $nonPdacVol;

    /**
     * @var string
     */
    public $pancVol;

    /**
     * @var string
     */
    public $pdacVol;

    /**
     * @var string[]
     */
    public $possibilities;
    protected $_name = [
        'mask' => 'Mask',
        'nonPdacVol' => 'NonPdacVol',
        'pancVol' => 'PancVol',
        'pdacVol' => 'PdacVol',
        'possibilities' => 'Possibilities',
    ];

    public function validate()
    {
        if (\is_array($this->possibilities)) {
            Model::validateArray($this->possibilities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }

        if (null !== $this->nonPdacVol) {
            $res['NonPdacVol'] = $this->nonPdacVol;
        }

        if (null !== $this->pancVol) {
            $res['PancVol'] = $this->pancVol;
        }

        if (null !== $this->pdacVol) {
            $res['PdacVol'] = $this->pdacVol;
        }

        if (null !== $this->possibilities) {
            if (\is_array($this->possibilities)) {
                $res['Possibilities'] = [];
                $n1 = 0;
                foreach ($this->possibilities as $item1) {
                    $res['Possibilities'][$n1++] = $item1;
                }
            }
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
        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }

        if (isset($map['NonPdacVol'])) {
            $model->nonPdacVol = $map['NonPdacVol'];
        }

        if (isset($map['PancVol'])) {
            $model->pancVol = $map['PancVol'];
        }

        if (isset($map['PdacVol'])) {
            $model->pdacVol = $map['PdacVol'];
        }

        if (isset($map['Possibilities'])) {
            if (!empty($map['Possibilities'])) {
                $model->possibilities = [];
                $n1 = 0;
                foreach ($map['Possibilities'] as $item1) {
                    $model->possibilities[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
