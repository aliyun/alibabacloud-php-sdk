<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;

class RemoveWhiteListSettingShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $idsShrink;
    /**
     * @var string
     */
    public $serviceCode;
    protected $_name = [
        'idsShrink'   => 'Ids',
        'serviceCode' => 'ServiceCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->idsShrink) {
            $res['Ids'] = $this->idsShrink;
        }

        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
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
        if (isset($map['Ids'])) {
            $model->idsShrink = $map['Ids'];
        }

        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }

        return $model;
    }
}
