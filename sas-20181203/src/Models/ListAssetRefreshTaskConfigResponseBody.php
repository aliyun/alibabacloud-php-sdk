<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListAssetRefreshTaskConfigResponseBody\assetRefreshConfig;
use AlibabaCloud\Tea\Model;

class ListAssetRefreshTaskConfigResponseBody extends Model
{
    /**
     * @description The asset synchronization configuration.
     *
     * @var assetRefreshConfig[]
     */
    public $assetRefreshConfig;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example D65AADFC-1D20-5A6A-8F6A-9FA53C0DC1F8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'assetRefreshConfig' => 'AssetRefreshConfig',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetRefreshConfig) {
            $res['AssetRefreshConfig'] = [];
            if (null !== $this->assetRefreshConfig && \is_array($this->assetRefreshConfig)) {
                $n = 0;
                foreach ($this->assetRefreshConfig as $item) {
                    $res['AssetRefreshConfig'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListAssetRefreshTaskConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetRefreshConfig'])) {
            if (!empty($map['AssetRefreshConfig'])) {
                $model->assetRefreshConfig = [];
                $n                         = 0;
                foreach ($map['AssetRefreshConfig'] as $item) {
                    $model->assetRefreshConfig[$n++] = null !== $item ? assetRefreshConfig::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
