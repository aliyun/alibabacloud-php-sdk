<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\GetJobInfoResponseBody\mtsTransferJob;
use AlibabaCloud\Tea\Model;

class GetJobInfoResponseBody extends Model
{
    /**
     * @var mtsTransferJob
     */
    public $mtsTransferJob;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mtsTransferJob' => 'MtsTransferJob',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mtsTransferJob) {
            $res['MtsTransferJob'] = null !== $this->mtsTransferJob ? $this->mtsTransferJob->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJobInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MtsTransferJob'])) {
            $model->mtsTransferJob = mtsTransferJob::fromMap($map['MtsTransferJob']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
