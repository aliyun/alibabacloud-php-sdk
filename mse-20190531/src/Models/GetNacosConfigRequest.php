<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class GetNacosConfigRequest extends Model
{
    /**
     * @description Language type of the returned information:
     *
     * - zh: Chinese
     * - en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description Whether it is a Beta release.
     *
     * - `true`: Yes
     * - `false`: No
     *
     * @example true
     *
     * @var bool
     */
    public $beta;

    /**
     * @description Data ID.
     *
     * This parameter is required.
     *
     * @example halvie-mp-item****
     *
     * @var string
     */
    public $dataId;

    /**
     * @description Configuration group information.
     *
     * This parameter is required.
     *
     * @example common
     *
     * @var string
     */
    public $group;

    /**
     * @description Instance ID.
     *
     * This parameter is required.
     *
     * @example mse-cn-i7m2h0****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Namespace ID.
     *
     * @example ddaf8f12-****-b1c1-86e7c72e266b
     *
     * @var string
     */
    public $namespaceId;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'beta' => 'Beta',
        'dataId' => 'DataId',
        'group' => 'Group',
        'instanceId' => 'InstanceId',
        'namespaceId' => 'NamespaceId',
    ];

    public function validate() {}

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
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNacosConfigRequest
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
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        return $model;
    }
}
