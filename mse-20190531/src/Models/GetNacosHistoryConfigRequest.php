<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class GetNacosHistoryConfigRequest extends Model
{
    /**
     * @description The data structure.
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The name of the group.
     *
     * @example msg-center.main.yaml
     *
     * @var string
     */
    public $dataId;

    /**
     * @description The ID of the namespace.
     *
     * @example DEFAULT_GROUP
     *
     * @var string
     */
    public $group;

    /**
     * @description The ID of the data.
     *
     * @example mse_prepaid_public_cn-st220g9ka02
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The version ID of the configuration.
     *
     * @example 6cf708a5-****-89f2-3ba62c5ee9ba
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example 40****
     *
     * @var string
     */
    public $nid;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'dataId'         => 'DataId',
        'group'          => 'Group',
        'instanceId'     => 'InstanceId',
        'namespaceId'    => 'NamespaceId',
        'nid'            => 'Nid',
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
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->nid) {
            $res['Nid'] = $this->nid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNacosHistoryConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
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
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['Nid'])) {
            $model->nid = $map['Nid'];
        }

        return $model;
    }
}
