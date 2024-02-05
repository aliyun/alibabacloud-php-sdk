<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20230701\Models\AddImageRequest;

use AlibabaCloud\SDK\EHPC\V20230701\Models\AddImageRequest\containerImageSpec\registryCredential;
use AlibabaCloud\Tea\Model;

class containerImageSpec extends Model
{
    /**
     * @example True
     *
     * @var bool
     */
    public $isACREnterprise;

    /**
     * @example True
     *
     * @var bool
     */
    public $isACRRegistry;

    /**
     * @var registryCredential
     */
    public $registryCredential;

    /**
     * @example cri-xyz795ygf8k9****
     *
     * @var string
     */
    public $registryCriId;

    /**
     * @example registry-vpc.cn-hangzhou.aliyuncs.com/ehpc_open/nginx:latest
     *
     * @var string
     */
    public $registryUrl;
    protected $_name = [
        'isACREnterprise'    => 'IsACREnterprise',
        'isACRRegistry'      => 'IsACRRegistry',
        'registryCredential' => 'RegistryCredential',
        'registryCriId'      => 'RegistryCriId',
        'registryUrl'        => 'RegistryUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isACREnterprise) {
            $res['IsACREnterprise'] = $this->isACREnterprise;
        }
        if (null !== $this->isACRRegistry) {
            $res['IsACRRegistry'] = $this->isACRRegistry;
        }
        if (null !== $this->registryCredential) {
            $res['RegistryCredential'] = null !== $this->registryCredential ? $this->registryCredential->toMap() : null;
        }
        if (null !== $this->registryCriId) {
            $res['RegistryCriId'] = $this->registryCriId;
        }
        if (null !== $this->registryUrl) {
            $res['RegistryUrl'] = $this->registryUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containerImageSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsACREnterprise'])) {
            $model->isACREnterprise = $map['IsACREnterprise'];
        }
        if (isset($map['IsACRRegistry'])) {
            $model->isACRRegistry = $map['IsACRRegistry'];
        }
        if (isset($map['RegistryCredential'])) {
            $model->registryCredential = registryCredential::fromMap($map['RegistryCredential']);
        }
        if (isset($map['RegistryCriId'])) {
            $model->registryCriId = $map['RegistryCriId'];
        }
        if (isset($map['RegistryUrl'])) {
            $model->registryUrl = $map['RegistryUrl'];
        }

        return $model;
    }
}
