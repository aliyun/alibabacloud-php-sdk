<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetSupportedModulesResponseBody\supportedModuleResponse;
use AlibabaCloud\Tea\Model;

class GetSupportedModulesResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example C699E4E4-F2F4-58FC-A949-457FFE59****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The supported modules. The module information is classified by cloud service provider.
     *
     * @var supportedModuleResponse[]
     */
    public $supportedModuleResponse;
    protected $_name = [
        'requestId' => 'RequestId',
        'supportedModuleResponse' => 'SupportedModuleResponse',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->supportedModuleResponse) {
            $res['SupportedModuleResponse'] = [];
            if (null !== $this->supportedModuleResponse && \is_array($this->supportedModuleResponse)) {
                $n = 0;
                foreach ($this->supportedModuleResponse as $item) {
                    $res['SupportedModuleResponse'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSupportedModulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SupportedModuleResponse'])) {
            if (!empty($map['SupportedModuleResponse'])) {
                $model->supportedModuleResponse = [];
                $n = 0;
                foreach ($map['SupportedModuleResponse'] as $item) {
                    $model->supportedModuleResponse[$n++] = null !== $item ? supportedModuleResponse::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
