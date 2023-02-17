<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class EtlFunctionConfig extends Model
{
    /**
     * @var string
     */
    public $functionProvider;
    protected $_name = [
        'functionProvider' => 'functionProvider',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->functionProvider) {
            $res['functionProvider'] = $this->functionProvider;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EtlFunctionConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['functionProvider'])) {
            $model->functionProvider = $map['functionProvider'];
        }

        return $model;
    }
}
