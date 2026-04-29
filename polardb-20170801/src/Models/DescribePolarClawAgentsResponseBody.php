<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawAgentsResponseBody\agents;

class DescribePolarClawAgentsResponseBody extends Model
{
    /**
     * @var agents[]
     */
    public $agents;

    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $defaultId;

    /**
     * @var string
     */
    public $mainKey;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $scope;
    protected $_name = [
        'agents' => 'Agents',
        'applicationId' => 'ApplicationId',
        'code' => 'Code',
        'defaultId' => 'DefaultId',
        'mainKey' => 'MainKey',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'scope' => 'Scope',
    ];

    public function validate()
    {
        if (\is_array($this->agents)) {
            Model::validateArray($this->agents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agents) {
            if (\is_array($this->agents)) {
                $res['Agents'] = [];
                $n1 = 0;
                foreach ($this->agents as $item1) {
                    $res['Agents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->defaultId) {
            $res['DefaultId'] = $this->defaultId;
        }

        if (null !== $this->mainKey) {
            $res['MainKey'] = $this->mainKey;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
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
        if (isset($map['Agents'])) {
            if (!empty($map['Agents'])) {
                $model->agents = [];
                $n1 = 0;
                foreach ($map['Agents'] as $item1) {
                    $model->agents[$n1] = agents::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['DefaultId'])) {
            $model->defaultId = $map['DefaultId'];
        }

        if (isset($map['MainKey'])) {
            $model->mainKey = $map['MainKey'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        return $model;
    }
}
