<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListPrivateRegistryTypeResponseBody\registryTypeInfos;
use AlibabaCloud\Tea\Model;

class ListPrivateRegistryTypeResponseBody extends Model
{
    /**
     * @var registryTypeInfos[]
     */
    public $registryTypeInfos;

    /**
     * @example 24A20733-10A0-4AF6-BE6B-E3322413****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'registryTypeInfos' => 'RegistryTypeInfos',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->registryTypeInfos) {
            $res['RegistryTypeInfos'] = [];
            if (null !== $this->registryTypeInfos && \is_array($this->registryTypeInfos)) {
                $n = 0;
                foreach ($this->registryTypeInfos as $item) {
                    $res['RegistryTypeInfos'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListPrivateRegistryTypeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegistryTypeInfos'])) {
            if (!empty($map['RegistryTypeInfos'])) {
                $model->registryTypeInfos = [];
                $n                        = 0;
                foreach ($map['RegistryTypeInfos'] as $item) {
                    $model->registryTypeInfos[$n++] = null !== $item ? registryTypeInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
