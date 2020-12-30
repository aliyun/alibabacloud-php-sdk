<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\GetServiceSettingsResponseBody\serviceSettings;
use AlibabaCloud\Tea\Model;

class GetServiceSettingsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var serviceSettings[]
     */
    public $serviceSettings;
    protected $_name = [
        'requestId'       => 'RequestId',
        'serviceSettings' => 'ServiceSettings',
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
        if (null !== $this->serviceSettings) {
            $res['ServiceSettings'] = [];
            if (null !== $this->serviceSettings && \is_array($this->serviceSettings)) {
                $n = 0;
                foreach ($this->serviceSettings as $item) {
                    $res['ServiceSettings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceSettingsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceSettings'])) {
            if (!empty($map['ServiceSettings'])) {
                $model->serviceSettings = [];
                $n                      = 0;
                foreach ($map['ServiceSettings'] as $item) {
                    $model->serviceSettings[$n++] = null !== $item ? serviceSettings::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
