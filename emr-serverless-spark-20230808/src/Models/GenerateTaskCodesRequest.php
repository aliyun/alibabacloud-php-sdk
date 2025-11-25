<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;

class GenerateTaskCodesRequest extends Model
{
    /**
     * @var int
     */
    public $genNum;

    /**
     * @var string
     */
    public $productNamespace;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'genNum' => 'genNum',
        'productNamespace' => 'productNamespace',
        'regionId' => 'regionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->genNum) {
            $res['genNum'] = $this->genNum;
        }

        if (null !== $this->productNamespace) {
            $res['productNamespace'] = $this->productNamespace;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
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
        if (isset($map['genNum'])) {
            $model->genNum = $map['genNum'];
        }

        if (isset($map['productNamespace'])) {
            $model->productNamespace = $map['productNamespace'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
