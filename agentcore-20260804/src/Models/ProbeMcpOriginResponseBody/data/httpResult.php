<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ProbeMcpOriginResponseBody\data;

use AlibabaCloud\Dara\Model;

class httpResult extends Model
{
    /**
     * @var string
     */
    public $connectionStatus;

    /**
     * @var string
     */
    public $definitionStatus;

    /**
     * @var int
     */
    public $httpStatusCode;
    protected $_name = [
        'connectionStatus' => 'connectionStatus',
        'definitionStatus' => 'definitionStatus',
        'httpStatusCode' => 'httpStatusCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionStatus) {
            $res['connectionStatus'] = $this->connectionStatus;
        }

        if (null !== $this->definitionStatus) {
            $res['definitionStatus'] = $this->definitionStatus;
        }

        if (null !== $this->httpStatusCode) {
            $res['httpStatusCode'] = $this->httpStatusCode;
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
        if (isset($map['connectionStatus'])) {
            $model->connectionStatus = $map['connectionStatus'];
        }

        if (isset($map['definitionStatus'])) {
            $model->definitionStatus = $map['definitionStatus'];
        }

        if (isset($map['httpStatusCode'])) {
            $model->httpStatusCode = $map['httpStatusCode'];
        }

        return $model;
    }
}
