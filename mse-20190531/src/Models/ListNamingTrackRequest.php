<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class ListNamingTrackRequest extends Model
{
    /**
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @example 1665299698
     *
     * @var int
     */
    public $endTs;

    /**
     * @example group
     *
     * @var string
     */
    public $group;

    /**
     * @example mse_prepaid_public_cn-tl32d*****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 172.16.183.232
     *
     * @var string
     */
    public $ip;

    /**
     * @example cd4d3703-e2a6-46b5-85c6-4447e4f****
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example {}
     *
     * @var string
     */
    public $requestPars;

    /**
     * @example false
     *
     * @var bool
     */
    public $reverse;

    /**
     * @example fpx-xms-baseinfo
     *
     * @var string
     */
    public $serviceName;

    /**
     * @example 1660238450
     *
     * @var int
     */
    public $startTs;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'endTs'          => 'EndTs',
        'group'          => 'Group',
        'instanceId'     => 'InstanceId',
        'ip'             => 'Ip',
        'namespaceId'    => 'NamespaceId',
        'pageNum'        => 'PageNum',
        'pageSize'       => 'PageSize',
        'requestPars'    => 'RequestPars',
        'reverse'        => 'Reverse',
        'serviceName'    => 'ServiceName',
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
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->startTs) {
            $res['StartTs'] = $this->startTs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNamingTrackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
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
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['StartTs'])) {
            $model->startTs = $map['StartTs'];
        }

        return $model;
    }
}
