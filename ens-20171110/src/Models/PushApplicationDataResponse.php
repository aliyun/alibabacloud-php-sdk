<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\PushApplicationDataResponse\pushResults;
use AlibabaCloud\Tea\Model;

class PushApplicationDataResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var pushResults
     */
    public $pushResults;
    protected $_name = [
        'requestId'   => 'RequestId',
        'pushResults' => 'PushResults',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('pushResults', $this->pushResults, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pushResults) {
            $res['PushResults'] = null !== $this->pushResults ? $this->pushResults->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushApplicationDataResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PushResults'])) {
            $model->pushResults = pushResults::fromMap($map['PushResults']);
        }

        return $model;
    }
}
