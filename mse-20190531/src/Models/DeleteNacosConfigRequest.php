<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class DeleteNacosConfigRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var bool
     */
    public $beta;

    /**
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $group;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $mseSessionId;

    /**
     * @var string
     */
    public $namespaceId;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'beta'           => 'Beta',
        'dataId'         => 'DataId',
        'group'          => 'Group',
        'instanceId'     => 'InstanceId',
        'mseSessionId'   => 'MseSessionId',
        'namespaceId'    => 'NamespaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->beta) {
            $res['Beta'] = $this->beta;
        }
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->mseSessionId) {
            $res['MseSessionId'] = $this->mseSessionId;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteNacosConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['Beta'])) {
            $model->beta = $map['Beta'];
        }
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MseSessionId'])) {
            $model->mseSessionId = $map['MseSessionId'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        return $model;
    }
}
