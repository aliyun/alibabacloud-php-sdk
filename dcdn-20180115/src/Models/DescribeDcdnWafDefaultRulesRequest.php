<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnWafDefaultRulesRequest extends Model
{
    /**
     * @example {"DefenseScene":"anti_scan"}
     *
     * @var string
     */
    public $queryArgs;
    protected $_name = [
        'queryArgs' => 'QueryArgs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queryArgs) {
            $res['QueryArgs'] = $this->queryArgs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnWafDefaultRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QueryArgs'])) {
            $model->queryArgs = $map['QueryArgs'];
        }

        return $model;
    }
}
