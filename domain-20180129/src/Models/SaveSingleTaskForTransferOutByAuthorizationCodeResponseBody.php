<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class SaveSingleTaskForTransferOutByAuthorizationCodeResponseBody extends Model
{
    /**
     * @example C560A803-B975-481D-A66B-A4395EA863A1
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8
     *
     * @var string
     */
    public $taskNo;
    protected $_name = [
        'requestId' => 'RequestId',
        'taskNo'    => 'TaskNo',
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
        if (null !== $this->taskNo) {
            $res['TaskNo'] = $this->taskNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveSingleTaskForTransferOutByAuthorizationCodeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskNo'])) {
            $model->taskNo = $map['TaskNo'];
        }

        return $model;
    }
}
