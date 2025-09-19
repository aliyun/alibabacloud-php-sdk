<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClientConfSetupResponseBody\clientConf;

class DescribeClientConfSetupResponseBody extends Model
{
    /**
     * @var clientConf
     */
    public $clientConf;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clientConf' => 'ClientConf',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->clientConf) {
            $this->clientConf->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientConf) {
            $res['ClientConf'] = null !== $this->clientConf ? $this->clientConf->toArray($noStream) : $this->clientConf;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ClientConf'])) {
            $model->clientConf = clientConf::fromMap($map['ClientConf']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
