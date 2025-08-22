<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;

class DescribeDcdnWafDefaultRulesRequest extends Model
{
    /**
     * @var string
     */
    public $queryArgs;
    protected $_name = [
        'queryArgs' => 'QueryArgs',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->queryArgs) {
            $res['QueryArgs'] = $this->queryArgs;
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
        if (isset($map['QueryArgs'])) {
            $model->queryArgs = $map['QueryArgs'];
        }

        return $model;
    }
}
