<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetServiceSettingsResponseBody\serviceSettings;

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
        'requestId' => 'RequestId',
        'serviceSettings' => 'ServiceSettings',
    ];

    public function validate()
    {
        if (\is_array($this->serviceSettings)) {
            Model::validateArray($this->serviceSettings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->serviceSettings) {
            if (\is_array($this->serviceSettings)) {
                $res['ServiceSettings'] = [];
                $n1 = 0;
                foreach ($this->serviceSettings as $item1) {
                    $res['ServiceSettings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ServiceSettings'])) {
            if (!empty($map['ServiceSettings'])) {
                $model->serviceSettings = [];
                $n1 = 0;
                foreach ($map['ServiceSettings'] as $item1) {
                    $model->serviceSettings[$n1] = serviceSettings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
