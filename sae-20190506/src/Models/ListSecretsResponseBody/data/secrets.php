<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListSecretsResponseBody\data;

use AlibabaCloud\SDK\Sae\V20190506\Models\ListSecretsResponseBody\data\secrets\relateApps;
use AlibabaCloud\Tea\Model;

class secrets extends Model
{
    /**
     * @description The time when the Secret was created.
     *
     * @example 1593760185111
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The namespace ID.
     *
     * @example cn-beijing:test
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The associated applications.
     *
     * @var relateApps[]
     */
    public $relateApps;

    /**
     * @description The Secret ID.
     *
     * @example 16
     *
     * @var int
     */
    public $secretId;

    /**
     * @description The Secret name.
     *
     * @example registry-auth
     *
     * @var string
     */
    public $secretName;

    /**
     * @description The Secret type.
     *
     * Set the value to **kubernetes.io/dockerconfigjson**. The value indicates the secret for the username and password of the image repository and is used for authentication when images are pulled during application deployment.
     * @example kubernetes.io/dockerconfigjson
     *
     * @var string
     */
    public $secretType;

    /**
     * @description The time when the Secret was updated.
     *
     * @example 1593760185111
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime'  => 'CreateTime',
        'namespaceId' => 'NamespaceId',
        'relateApps'  => 'RelateApps',
        'secretId'    => 'SecretId',
        'secretName'  => 'SecretName',
        'secretType'  => 'SecretType',
        'updateTime'  => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->relateApps) {
            $res['RelateApps'] = [];
            if (null !== $this->relateApps && \is_array($this->relateApps)) {
                $n = 0;
                foreach ($this->relateApps as $item) {
                    $res['RelateApps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->secretId) {
            $res['SecretId'] = $this->secretId;
        }
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }
        if (null !== $this->secretType) {
            $res['SecretType'] = $this->secretType;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return secrets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['RelateApps'])) {
            if (!empty($map['RelateApps'])) {
                $model->relateApps = [];
                $n                 = 0;
                foreach ($map['RelateApps'] as $item) {
                    $model->relateApps[$n++] = null !== $item ? relateApps::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SecretId'])) {
            $model->secretId = $map['SecretId'];
        }
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }
        if (isset($map['SecretType'])) {
            $model->secretType = $map['SecretType'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
