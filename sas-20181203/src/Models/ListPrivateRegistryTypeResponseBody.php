<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListPrivateRegistryTypeResponseBody\registryTypeInfos;

class ListPrivateRegistryTypeResponseBody extends Model
{
    /**
     * @var registryTypeInfos[]
     */
    public $registryTypeInfos;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'registryTypeInfos' => 'RegistryTypeInfos',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->registryTypeInfos)) {
            Model::validateArray($this->registryTypeInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->registryTypeInfos) {
            if (\is_array($this->registryTypeInfos)) {
                $res['RegistryTypeInfos'] = [];
                $n1                       = 0;
                foreach ($this->registryTypeInfos as $item1) {
                    $res['RegistryTypeInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RegistryTypeInfos'])) {
            if (!empty($map['RegistryTypeInfos'])) {
                $model->registryTypeInfos = [];
                $n1                       = 0;
                foreach ($map['RegistryTypeInfos'] as $item1) {
                    $model->registryTypeInfos[$n1++] = registryTypeInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
