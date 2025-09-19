<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListImageRegistryExtraResponseBody;

use AlibabaCloud\Dara\Model;

class imageRegistryExtraInfos extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $authToken;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var int
     */
    public $registryId;

    /**
     * @var string
     */
    public $registryType;
    protected $_name = [
        'aliUid' => 'AliUid',
        'authToken' => 'AuthToken',
        'id' => 'Id',
        'namespace' => 'Namespace',
        'registryId' => 'RegistryId',
        'registryType' => 'RegistryType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
