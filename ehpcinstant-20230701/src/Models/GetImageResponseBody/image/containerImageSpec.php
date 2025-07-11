<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetImageResponseBody\image;

use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetImageResponseBody\image\containerImageSpec\registryCredential;
use AlibabaCloud\Tea\Model;

class containerImageSpec extends Model
{
    /**
     * @var string
     */
    public $architecture;

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
     * @var string
     */
    public $osTag;

    /**
     * @var string
     */
    public $platform;

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
        'architecture' => 'Architecture',
        'isACREnterprise' => 'IsACREnterprise',
        'isACRRegistry' => 'IsACRRegistry',
        'osTag' => 'OsTag',
        'platform' => 'Platform',
        'registryCredential' => 'RegistryCredential',
        'registryCriId' => 'RegistryCriId',
        'registryUrl' => 'RegistryUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }
        if (null !== $this->isACREnterprise) {
            $res['IsACREnterprise'] = $this->isACREnterprise;
        }
        if (null !== $this->isACRRegistry) {
            $res['IsACRRegistry'] = $this->isACRRegistry;
        }
        if (null !== $this->osTag) {
            $res['OsTag'] = $this->osTag;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
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
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }
        if (isset($map['IsACREnterprise'])) {
            $model->isACREnterprise = $map['IsACREnterprise'];
        }
        if (isset($map['IsACRRegistry'])) {
            $model->isACRRegistry = $map['IsACRRegistry'];
        }
        if (isset($map['OsTag'])) {
            $model->osTag = $map['OsTag'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
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
