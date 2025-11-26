<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\PushApplicationDataResponseBody\pushResults;

class PushApplicationDataResponseBody extends Model
{
    /**
     * @var pushResults
     */
    public $pushResults;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pushResults' => 'PushResults',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->pushResults) {
            $this->pushResults->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pushResults) {
            $res['PushResults'] = null !== $this->pushResults ? $this->pushResults->toArray($noStream) : $this->pushResults;
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
        if (isset($map['PushResults'])) {
            $model->pushResults = pushResults::fromMap($map['PushResults']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
