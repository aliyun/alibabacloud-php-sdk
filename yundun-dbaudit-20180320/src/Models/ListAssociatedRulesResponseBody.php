<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListAssociatedRulesResponseBody\serverData;
use AlibabaCloud\Tea\Model;

class ListAssociatedRulesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var serverData
     */
    public $serverData;
    protected $_name = [
        'requestId'  => 'RequestId',
        'serverData' => 'ServerData',
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
        if (null !== $this->serverData) {
            $res['ServerData'] = null !== $this->serverData ? $this->serverData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAssociatedRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServerData'])) {
            $model->serverData = serverData::fromMap($map['ServerData']);
        }

        return $model;
    }
}
