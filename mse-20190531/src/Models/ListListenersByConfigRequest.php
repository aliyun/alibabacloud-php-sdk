<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class ListListenersByConfigRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The ID of the data.
     *
     * @example zeekr-clueboss.yml
     *
     * @var string
     */
    public $dataId;

    /**
     * @description The name of the group.
     *
     * @example prod
     *
     * @var string
     */
    public $group;

    /**
     * @description The ID of the instance.
     *
     * @example mse-cn-m7r1yurp00e
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the namespace.
     *
     * @example aaeb4d28-c9eb-4fa2-85f5-d03ce7ee8df1
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The extended request parameters in the JSON format.
     *
     * @example {\\"appGroup\\":\\"emas-zfive_prehost\\",\\"appName\\":\\"emas-zfive\\",\\"appStage\\":\\"PRE_PUBLISH\\",\\"appUnit\\":\\"\\",\\"bucId\\":\\"225902\\",\\"bucName\\":\\"Wireless\\",\\"provider\\":\\"aliyun\\"}
     *
     * @var string
     */
    public $requestPars;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'dataId'         => 'DataId',
        'group'          => 'Group',
        'instanceId'     => 'InstanceId',
        'namespaceId'    => 'NamespaceId',
        'requestPars'    => 'RequestPars',
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
        if (null !== $this->requestPars) {
            $res['RequestPars'] = $this->requestPars;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListListenersByConfigRequest
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
        if (isset($map['RequestPars'])) {
            $model->requestPars = $map['RequestPars'];
        }

        return $model;
    }
}
