<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLivePackageChannelCredentialsResponseBody\ingestEndpoints;
use AlibabaCloud\Tea\Model;

class UpdateLivePackageChannelCredentialsResponseBody extends Model
{
    /**
     * @description The information about the ingest endpoint.
     *
     * @var ingestEndpoints[]
     */
    public $ingestEndpoints;

    /**
     * @description The request ID.
     *
     * @example 771A1414-27BF-53E6-AB73-EFCB*****ACF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ingestEndpoints' => 'IngestEndpoints',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ingestEndpoints) {
            $res['IngestEndpoints'] = [];
            if (null !== $this->ingestEndpoints && \is_array($this->ingestEndpoints)) {
                $n = 0;
                foreach ($this->ingestEndpoints as $item) {
                    $res['IngestEndpoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLivePackageChannelCredentialsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IngestEndpoints'])) {
            if (!empty($map['IngestEndpoints'])) {
                $model->ingestEndpoints = [];
                $n                      = 0;
                foreach ($map['IngestEndpoints'] as $item) {
                    $model->ingestEndpoints[$n++] = null !== $item ? ingestEndpoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
