<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Saf\V20190521\Models;

use AlibabaCloud\Tea\Model;

class ExecuteRequestMLRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $service;

    /**
     * @var string
     */
    public $serviceParameters;
    protected $_name = [
        'lang'              => 'Lang',
        'service'           => 'Service',
        'serviceParameters' => 'ServiceParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }
        if (null !== $this->serviceParameters) {
            $res['ServiceParameters'] = $this->serviceParameters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteRequestMLRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }
        if (isset($map['ServiceParameters'])) {
            $model->serviceParameters = $map['ServiceParameters'];
        }

        return $model;
    }
}
