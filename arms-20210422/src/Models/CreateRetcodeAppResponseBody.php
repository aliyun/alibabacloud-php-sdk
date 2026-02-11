<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20210422\Models\CreateRetcodeAppResponseBody\retcodeAppDataBean;

class CreateRetcodeAppResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var retcodeAppDataBean
     */
    public $retcodeAppDataBean;
    protected $_name = [
        'requestId' => 'RequestId',
        'retcodeAppDataBean' => 'RetcodeAppDataBean',
    ];

    public function validate()
    {
        if (null !== $this->retcodeAppDataBean) {
            $this->retcodeAppDataBean->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->retcodeAppDataBean) {
            $res['RetcodeAppDataBean'] = null !== $this->retcodeAppDataBean ? $this->retcodeAppDataBean->toArray($noStream) : $this->retcodeAppDataBean;
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

        if (isset($map['RetcodeAppDataBean'])) {
            $model->retcodeAppDataBean = retcodeAppDataBean::fromMap($map['RetcodeAppDataBean']);
        }

        return $model;
    }
}
