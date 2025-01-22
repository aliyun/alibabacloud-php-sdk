<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLivePackageChannelCredentialsResponseBody\ingestEndpoints;

class UpdateLivePackageChannelCredentialsResponseBody extends Model
{
    /**
     * @var ingestEndpoints[]
     */
    public $ingestEndpoints;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ingestEndpoints' => 'IngestEndpoints',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->ingestEndpoints)) {
            Model::validateArray($this->ingestEndpoints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ingestEndpoints) {
            if (\is_array($this->ingestEndpoints)) {
                $res['IngestEndpoints'] = [];
                $n1                     = 0;
                foreach ($this->ingestEndpoints as $item1) {
                    $res['IngestEndpoints'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['IngestEndpoints'])) {
            if (!empty($map['IngestEndpoints'])) {
                $model->ingestEndpoints = [];
                $n1                     = 0;
                foreach ($map['IngestEndpoints'] as $item1) {
                    $model->ingestEndpoints[$n1++] = ingestEndpoints::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
