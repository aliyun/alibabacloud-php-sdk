<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListMethodsResponseBody\serviceMethodList\serviceMethod;

use AlibabaCloud\Tea\Model;

class inputParams extends Model
{
    /**
     * @var string[]
     */
    public $inputParam;
    protected $_name = [
        'inputParam' => 'InputParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputParam) {
            $res['InputParam'] = $this->inputParam;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inputParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InputParam'])) {
            if (!empty($map['InputParam'])) {
                $model->inputParam = $map['InputParam'];
            }
        }

        return $model;
    }
}
