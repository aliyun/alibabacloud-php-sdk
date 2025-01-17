<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetSupportedModulesResponseBody\supportedModuleResponse;

class GetSupportedModulesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var supportedModuleResponse[]
     */
    public $supportedModuleResponse;
    protected $_name = [
        'requestId'               => 'RequestId',
        'supportedModuleResponse' => 'SupportedModuleResponse',
    ];

    public function validate()
    {
        if (\is_array($this->supportedModuleResponse)) {
            Model::validateArray($this->supportedModuleResponse);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->supportedModuleResponse) {
            if (\is_array($this->supportedModuleResponse)) {
                $res['SupportedModuleResponse'] = [];
                $n1                             = 0;
                foreach ($this->supportedModuleResponse as $item1) {
                    $res['SupportedModuleResponse'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SupportedModuleResponse'])) {
            if (!empty($map['SupportedModuleResponse'])) {
                $model->supportedModuleResponse = [];
                $n1                             = 0;
                foreach ($map['SupportedModuleResponse'] as $item1) {
                    $model->supportedModuleResponse[$n1++] = supportedModuleResponse::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
