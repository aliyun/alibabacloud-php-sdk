<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class ListConfigTrackRequest extends Model
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
     * @description The ID of the configuration.
     *
     * @example ballot
     *
     * @var string
     */
    public $dataId;

    /**
     * @description The end timestamp. Unit: seconds.
     *
     * @example 1657178373
     *
     * @var int
     */
    public $endTs;

    /**
     * @description The name of the configuration group.
     *
     * @example DEFAULT_GROUP
     *
     * @var string
     */
    public $group;

    /**
     * @description The ID of the instance.
     *
     * @example mse_prepaid_public_cn-i7m2ne****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The IP address of the listener.
     *
     * @example 192.168.22.2
     *
     * @var string
     */
    public $ip;

    /**
     * @description The ID of the namespace.
     *
     * @example f3a510e2-df52-4fad-9815-42d8bc40****
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The extended request parameters in the JSON format.
     *
     * @example {}
     *
     * @var string
     */
    public $requestPars;

    /**
     * @description Specifies whether to enable reverse ordering. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $reverse;

    /**
     * @description The start timestamp. Unit: seconds.
     *
     * @example 1671010148
     *
     * @var int
     */
    public $startTs;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'dataId'         => 'DataId',
        'endTs'          => 'EndTs',
        'group'          => 'Group',
        'instanceId'     => 'InstanceId',
        'ip'             => 'Ip',
        'namespaceId'    => 'NamespaceId',
        'pageNum'        => 'PageNum',
        'pageSize'       => 'PageSize',
        'requestPars'    => 'RequestPars',
        'reverse'        => 'Reverse',
        'startTs'        => 'StartTs',
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
        if (null !== $this->endTs) {
            $res['EndTs'] = $this->endTs;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
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
        if (null !== $this->requestPars) {
            $res['RequestPars'] = $this->requestPars;
        }
        if (null !== $this->reverse) {
            $res['Reverse'] = $this->reverse;
        }
        if (null !== $this->startTs) {
            $res['StartTs'] = $this->startTs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListConfigTrackRequest
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
        if (isset($map['EndTs'])) {
            $model->endTs = $map['EndTs'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
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
        if (isset($map['RequestPars'])) {
            $model->requestPars = $map['RequestPars'];
        }
        if (isset($map['Reverse'])) {
            $model->reverse = $map['Reverse'];
        }
        if (isset($map['StartTs'])) {
            $model->startTs = $map['StartTs'];
        }

        return $model;
    }
}
