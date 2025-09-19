<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListAssetRefreshTaskConfigResponseBody\assetRefreshConfig;

class ListAssetRefreshTaskConfigResponseBody extends Model
{
    /**
     * @var assetRefreshConfig[]
     */
    public $assetRefreshConfig;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'assetRefreshConfig' => 'AssetRefreshConfig',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->assetRefreshConfig)) {
            Model::validateArray($this->assetRefreshConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetRefreshConfig) {
            if (\is_array($this->assetRefreshConfig)) {
                $res['AssetRefreshConfig'] = [];
                $n1 = 0;
                foreach ($this->assetRefreshConfig as $item1) {
                    $res['AssetRefreshConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['AssetRefreshConfig'])) {
            if (!empty($map['AssetRefreshConfig'])) {
                $model->assetRefreshConfig = [];
                $n1 = 0;
                foreach ($map['AssetRefreshConfig'] as $item1) {
                    $model->assetRefreshConfig[$n1] = assetRefreshConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
