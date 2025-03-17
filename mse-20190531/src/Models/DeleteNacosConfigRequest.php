<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class DeleteNacosConfigRequest extends Model
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
     * @description Whether it is a Beta release. Default is false.
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
     * @description Configuration ID.
     *
     * This parameter is required.
     *
     * @example user-ds.yml
     *
     * @var string
     */
    public $dataId;

    /**
     * @description Group type.
     *
     * This parameter is required.
     *
     * @example HALVIE_MICRO_GROUP
     *
     * @var string
     */
    public $group;

    /**
     * @description Instance ID.
     *
     * This parameter is required.
     *
     * @example mse_prepaid_public_cn-tl32epfyu18
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Namespace ID. Default is public.
     *
     * @example 0e9d849b-****-8435da6c21ad
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
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        return $model;
    }
}
