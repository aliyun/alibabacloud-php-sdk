<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRetcodeAppByPidResponseBody\retcodeApp;
use AlibabaCloud\Tea\Model;

class GetRetcodeAppByPidResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 2983BEF7-4A0D-47A2-94A2-8E9C5E63****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The returned application data.
     *
     * @var retcodeApp
     */
    public $retcodeApp;
    protected $_name = [
        'requestId'  => 'RequestId',
        'retcodeApp' => 'RetcodeApp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->retcodeApp) {
            $res['RetcodeApp'] = null !== $this->retcodeApp ? $this->retcodeApp->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRetcodeAppByPidResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RetcodeApp'])) {
            $model->retcodeApp = retcodeApp::fromMap($map['RetcodeApp']);
        }

        return $model;
    }
}
