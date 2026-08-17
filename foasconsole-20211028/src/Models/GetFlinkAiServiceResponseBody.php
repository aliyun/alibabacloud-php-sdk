<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\GetFlinkAiServiceResponseBody\flinkAiServiceDTO;

class GetFlinkAiServiceResponseBody extends Model
{
    /**
     * @var flinkAiServiceDTO
     */
    public $flinkAiServiceDTO;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'flinkAiServiceDTO' => 'FlinkAiServiceDTO',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->flinkAiServiceDTO) {
            $this->flinkAiServiceDTO->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flinkAiServiceDTO) {
            $res['FlinkAiServiceDTO'] = null !== $this->flinkAiServiceDTO ? $this->flinkAiServiceDTO->toArray($noStream) : $this->flinkAiServiceDTO;
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
        if (isset($map['FlinkAiServiceDTO'])) {
            $model->flinkAiServiceDTO = flinkAiServiceDTO::fromMap($map['FlinkAiServiceDTO']);
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
