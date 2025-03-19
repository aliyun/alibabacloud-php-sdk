<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class UndeployHttpApiRequest extends Model
{
    /**
     * @example env-cqsmtellhtgvo***
     *
     * @var string
     */
    public $environmentId;

    /**
     * @example hr-cr82undlhtgrle***
     *
     * @var string
     */
    public $routeId;
    protected $_name = [
        'environmentId' => 'environmentId',
        'routeId' => 'routeId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }
        if (null !== $this->routeId) {
            $res['routeId'] = $this->routeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UndeployHttpApiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
        }
        if (isset($map['routeId'])) {
            $model->routeId = $map['routeId'];
        }

        return $model;
    }
}
