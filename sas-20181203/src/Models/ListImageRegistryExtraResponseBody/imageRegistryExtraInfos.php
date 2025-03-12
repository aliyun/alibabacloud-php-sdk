<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListImageRegistryExtraResponseBody;

use AlibabaCloud\Tea\Model;

class imageRegistryExtraInfos extends Model
{
    /**
     * @description Alibaba Cloud account ID.
     *
     * @example 176618589410****
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description Authorization token.
     *
     * @example 64ad8ddf-6a4c-46b5-8dea-b105a06bd534
     *
     * @var string
     */
    public $authToken;

    /**
     * @description Configuration ID.
     *
     * @example 113441
     *
     * @var int
     */
    public $id;

    /**
     * @description Namespace of the image.
     *
     * @example public-goods
     *
     * @var string
     */
    public $namespace;

    /**
     * @description Image registry ID.
     *
     * @example 25363
     *
     * @var int
     */
    public $registryId;

    /**
     * @description Image registry type. Values:
     *
     * - **acr**: ACR
     * - **harbor**: Harbor
     * - **quay**: Quay
     * - **CI/CD**: Jenkins
     * @example harbor
     *
     * @var string
     */
    public $registryType;
    protected $_name = [
        'aliUid'       => 'AliUid',
        'authToken'    => 'AuthToken',
        'id'           => 'Id',
        'namespace'    => 'Namespace',
        'registryId'   => 'RegistryId',
        'registryType' => 'RegistryType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->authToken) {
            $res['AuthToken'] = $this->authToken;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->registryId) {
            $res['RegistryId'] = $this->registryId;
        }
        if (null !== $this->registryType) {
            $res['RegistryType'] = $this->registryType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageRegistryExtraInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['AuthToken'])) {
            $model->authToken = $map['AuthToken'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['RegistryId'])) {
            $model->registryId = $map['RegistryId'];
        }
        if (isset($map['RegistryType'])) {
            $model->registryType = $map['RegistryType'];
        }

        return $model;
    }
}
