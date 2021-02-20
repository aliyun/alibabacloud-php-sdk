<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\PushApplicationDataResponseBody\pushResults;
use AlibabaCloud\Tea\Model;

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
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pushResults) {
            $res['PushResults'] = null !== $this->pushResults ? $this->pushResults->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushApplicationDataResponseBody
     */
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
