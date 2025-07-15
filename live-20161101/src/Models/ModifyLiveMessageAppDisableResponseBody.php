<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ModifyLiveMessageAppDisableResponseBody extends Model
{
    /**
     * @description The ID of the interactive messaging application.
     *
     * @example ab6b5740****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The signature of the interactive messaging application. It is required by the interactive messaging SDK.
     *
     * @example H4sIAAAAAAAE/wBwAI//zguHB+lYCilkv7diSkk4GhHQAvMXs5tWyI+I09+uEBiB5sqa28ycJSJFmsd50Mhz8nDrvvqmti+fVaNLC5CMgLvNIy48v1aV9x74LRNFN0+Dxd2Al51xuDNkEIDaEwjqfyxscTXjSr0iQjHu2WgkpQAAAP//AQAA//+yR5XCc****
     *
     * @var string
     */
    public $appSign;

    /**
     * @description Indicates whether the interactive messaging application is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $disable;

    /**
     * @description The request ID.
     *
     * @example 6AA1AE11-EA78-1FD4-A966-6BA843073F6D
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appId' => 'AppId',
        'appSign' => 'AppSign',
        'disable' => 'Disable',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appSign) {
            $res['AppSign'] = $this->appSign;
        }
        if (null !== $this->disable) {
            $res['Disable'] = $this->disable;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyLiveMessageAppDisableResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppSign'])) {
            $model->appSign = $map['AppSign'];
        }
        if (isset($map['Disable'])) {
            $model->disable = $map['Disable'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
