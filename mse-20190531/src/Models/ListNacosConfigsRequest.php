<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class ListNacosConfigsRequest extends Model
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
     * @description The name of the application.
     *
     * @example fpx-pds-pns
     *
     * @var string
     */
    public $appName;

    /**
     * @description The ID of the data.
     *
     * @example zeekr-*
     *
     * @var string
     */
    public $dataId;

    /**
     * @description The name of the group. Default value: `default`
     *
     * @example crm
     *
     * @var string
     */
    public $group;

    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example mse-cn-7mz2fj****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the namespace.
     *
     * @example fad732a7-ff1a-4f21-8126-4edd4****
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The number of the page to return.
     *
     * This parameter is required.
     * @example 5
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of entries to return on each page.
     *
     * This parameter is required.
     * @example 200
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the region in which the instance resides. The region is supported by Microservices Engine (MSE).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The extended request parameters. The JSON format is supported.
     *
     * @example {\\\\"appGroup\\\\":\\\\"sm_zk_asi_na610\\\\",\\\\"appName\\\\":\\\\"sm-zk\\\\",\\\\"appStage\\\\":\\\\"PUBLISH\\\\",\\\\"appUnit\\\\":\\\\"center\\\\",\\\\"bucId\\\\":\\\\"193554\\\\",\\\\"bucName\\\\":\\\\"Alibaba Mobile Business Group-UC\\\\",\\\\"provider\\\\":\\\\"aliyun\\\\"}
     *
     * @var string
     */
    public $requestPars;

    /**
     * @description The tags.
     *
     * @example billing
     *
     * @var string
     */
    public $tags;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'appName'        => 'AppName',
        'dataId'         => 'DataId',
        'group'          => 'Group',
        'instanceId'     => 'InstanceId',
        'namespaceId'    => 'NamespaceId',
        'pageNum'        => 'PageNum',
        'pageSize'       => 'PageSize',
        'regionId'       => 'RegionId',
        'requestPars'    => 'RequestPars',
        'tags'           => 'Tags',
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
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
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
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestPars) {
            $res['RequestPars'] = $this->requestPars;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNacosConfigsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
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
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestPars'])) {
            $model->requestPars = $map['RequestPars'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
