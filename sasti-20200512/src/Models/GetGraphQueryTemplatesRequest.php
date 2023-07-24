<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sasti\V20200512\Models;

use AlibabaCloud\Tea\Model;

class GetGraphQueryTemplatesRequest extends Model
{
    /**
     * @var string
     */
    public $env;

    /**
     * @var string
     */
    public $serviceUnit;
    protected $_name = [
        'env'         => 'Env',
        'serviceUnit' => 'ServiceUnit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->serviceUnit) {
            $res['ServiceUnit'] = $this->serviceUnit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetGraphQueryTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }
        if (isset($map['ServiceUnit'])) {
            $model->serviceUnit = $map['ServiceUnit'];
        }

        return $model;
    }
}
