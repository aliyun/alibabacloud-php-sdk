<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\CreateSlrAndSlsProjectResponseBody\slsInfo;
use AlibabaCloud\Tea\Model;

class CreateSlrAndSlsProjectResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var slsInfo
     */
    public $slsInfo;
    protected $_name = [
        'requestId' => 'RequestId',
        'slsInfo'   => 'SlsInfo',
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
        if (null !== $this->slsInfo) {
            $res['SlsInfo'] = null !== $this->slsInfo ? $this->slsInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSlrAndSlsProjectResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SlsInfo'])) {
            $model->slsInfo = slsInfo::fromMap($map['SlsInfo']);
        }

        return $model;
    }
}
