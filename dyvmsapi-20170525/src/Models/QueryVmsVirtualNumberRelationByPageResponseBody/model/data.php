<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryVmsVirtualNumberRelationByPageResponseBody\model;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $numberCity;

    /**
     * @var string
     */
    public $numberProvince;

    /**
     * @var string
     */
    public $realNumber;

    /**
     * @var int
     */
    public $state;

    /**
     * @var string
     */
    public $virtualNumber;
    protected $_name = [
        'numberCity' => 'NumberCity',
        'numberProvince' => 'NumberProvince',
        'realNumber' => 'RealNumber',
        'state' => 'State',
        'virtualNumber' => 'VirtualNumber',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->numberCity) {
            $res['NumberCity'] = $this->numberCity;
        }

        if (null !== $this->numberProvince) {
            $res['NumberProvince'] = $this->numberProvince;
        }

        if (null !== $this->realNumber) {
            $res['RealNumber'] = $this->realNumber;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->virtualNumber) {
            $res['VirtualNumber'] = $this->virtualNumber;
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
        if (isset($map['NumberCity'])) {
            $model->numberCity = $map['NumberCity'];
        }

        if (isset($map['NumberProvince'])) {
            $model->numberProvince = $map['NumberProvince'];
        }

        if (isset($map['RealNumber'])) {
            $model->realNumber = $map['RealNumber'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['VirtualNumber'])) {
            $model->virtualNumber = $map['VirtualNumber'];
        }

        return $model;
    }
}
