<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeSecretResponseBody;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeSecretResponseBody\data\relateApps;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The time when the task was created.
     *
     * @example 1593746835111
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the namespace.
     *
     * @example cn-beijing:test
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The associated application.
     *
     * @var relateApps[]
     */
    public $relateApps;

    /**
     * @description Secret key-value pair data.
     *
     * @var string[]
     */
    public $secretData;

    /**
     * @description The ID of the Secret instance.
     *
     * @example 16
     *
     * @var int
     */
    public $secretId;

    /**
     * @description The name of the Secret instance.
     *
     * @example registry-auth
     *
     * @var string
     */
    public $secretName;

    /**
     * @description The type of the Secret instance.
     *
     * @example kubernetes.io/dockerconfigjson
     *
     * @var string
     */
    public $secretType;

    /**
     * @description The time when the task was updated.
     *
     * @example 1593746835111
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime'  => 'CreateTime',
        'namespaceId' => 'NamespaceId',
        'relateApps'  => 'RelateApps',
        'secretData'  => 'SecretData',
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
        if (null !== $this->secretData) {
            $res['SecretData'] = $this->secretData;
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
     * @return data
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
        if (isset($map['SecretData'])) {
            $model->secretData = $map['SecretData'];
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
