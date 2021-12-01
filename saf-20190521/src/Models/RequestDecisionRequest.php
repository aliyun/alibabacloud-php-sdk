<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Saf\V20190521\Models;

use AlibabaCloud\Tea\Model;

class RequestDecisionRequest extends Model
{
    /**
     * @var string
     */
    public $eventCode;

    /**
     * @var string
     */
    public $serviceParameters;
    protected $_name = [
        'eventCode'         => 'EventCode',
        'serviceParameters' => 'ServiceParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventCode) {
            $res['EventCode'] = $this->eventCode;
        }
        if (null !== $this->serviceParameters) {
            $res['ServiceParameters'] = $this->serviceParameters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RequestDecisionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventCode'])) {
            $model->eventCode = $map['EventCode'];
        }
        if (isset($map['ServiceParameters'])) {
            $model->serviceParameters = $map['ServiceParameters'];
        }

        return $model;
    }
}
