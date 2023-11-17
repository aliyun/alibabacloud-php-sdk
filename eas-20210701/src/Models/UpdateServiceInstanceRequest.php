<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class UpdateServiceInstanceRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $isolate;
    protected $_name = [
        'isolate' => 'Isolate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isolate) {
            $res['Isolate'] = $this->isolate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateServiceInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Isolate'])) {
            $model->isolate = $map['Isolate'];
        }

        return $model;
    }
}
