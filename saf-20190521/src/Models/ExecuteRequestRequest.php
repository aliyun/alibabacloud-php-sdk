<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Saf\V20190521\Models;

use AlibabaCloud\Tea\Model;

class ExecuteRequestRequest extends Model
{
    /**
     * @var string
     */
    public $serviceParameters;

    /**
     * @var string
     */
    public $service;
    protected $_name = [
        'serviceParameters' => 'ServiceParameters',
        'service'           => 'Service',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceParameters) {
            $res['ServiceParameters'] = $this->serviceParameters;
        }
        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteRequestRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceParameters'])) {
            $model->serviceParameters = $map['ServiceParameters'];
        }
        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }

        return $model;
    }
}
