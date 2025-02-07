<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Dara\Model;

class CheckMonitorAlertResponseBody extends Model
{
    /**
     * @var string
     */
    public $parameter;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'parameter' => 'Parameter',
        'requestId' => 'RequestId',
        'state'     => 'State',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parameter) {
            $res['Parameter'] = $this->parameter;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['Parameter'])) {
            $model->parameter = $map['Parameter'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
