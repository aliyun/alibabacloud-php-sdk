<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateAdInsertionResponseBody\config;
use AlibabaCloud\Tea\Model;

class UpdateAdInsertionResponseBody extends Model
{
    /**
     * @description The ad insertion configuration.
     *
     * @var config
     */
    public $config;

    /**
     * @description The ID of the request.
     *
     * @example ****63E8B7C7-4812-46AD-0FA56029AC86****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'config'    => 'Config',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAdInsertionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = config::fromMap($map['Config']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
