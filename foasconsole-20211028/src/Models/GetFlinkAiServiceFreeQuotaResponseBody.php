<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\GetFlinkAiServiceFreeQuotaResponseBody\flinkAiFreeQuotaDTO;

class GetFlinkAiServiceFreeQuotaResponseBody extends Model
{
    /**
     * @var flinkAiFreeQuotaDTO
     */
    public $flinkAiFreeQuotaDTO;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'flinkAiFreeQuotaDTO' => 'FlinkAiFreeQuotaDTO',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->flinkAiFreeQuotaDTO) {
            $this->flinkAiFreeQuotaDTO->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flinkAiFreeQuotaDTO) {
            $res['FlinkAiFreeQuotaDTO'] = null !== $this->flinkAiFreeQuotaDTO ? $this->flinkAiFreeQuotaDTO->toArray($noStream) : $this->flinkAiFreeQuotaDTO;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['FlinkAiFreeQuotaDTO'])) {
            $model->flinkAiFreeQuotaDTO = flinkAiFreeQuotaDTO::fromMap($map['FlinkAiFreeQuotaDTO']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
