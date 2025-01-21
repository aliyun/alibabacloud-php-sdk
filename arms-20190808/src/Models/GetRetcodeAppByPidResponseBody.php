<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRetcodeAppByPidResponseBody\retcodeApp;

class GetRetcodeAppByPidResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var retcodeApp
     */
    public $retcodeApp;
    protected $_name = [
        'requestId'  => 'RequestId',
        'retcodeApp' => 'RetcodeApp',
    ];

    public function validate()
    {
        if (null !== $this->retcodeApp) {
            $this->retcodeApp->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->retcodeApp) {
            $res['RetcodeApp'] = null !== $this->retcodeApp ? $this->retcodeApp->toArray($noStream) : $this->retcodeApp;
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

        if (isset($map['RetcodeApp'])) {
            $model->retcodeApp = retcodeApp::fromMap($map['RetcodeApp']);
        }

        return $model;
    }
}
