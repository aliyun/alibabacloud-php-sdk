<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class GetAgRelationRequest extends Model
{
    /**
     * @var string
     */
    public $agAccountType;

    /**
     * @var string
     */
    public $pk;
    protected $_name = [
        'agAccountType' => 'AgAccountType',
        'pk' => 'Pk',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agAccountType) {
            $res['AgAccountType'] = $this->agAccountType;
        }

        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
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
        if (isset($map['AgAccountType'])) {
            $model->agAccountType = $map['AgAccountType'];
        }

        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }

        return $model;
    }
}
