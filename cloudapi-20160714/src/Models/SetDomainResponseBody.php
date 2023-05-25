<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class SetDomainResponseBody extends Model
{
    /**
     * @example BINDING
     *
     * @var string
     */
    public $domainBindingStatus;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $domainLegalStatus;

    /**
     * @example api.demo.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $domainRemark;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $domainWebSocketStatus;

    /**
     * @example 927d50c0f2e54b359919923d908bb015
     *
     * @var string
     */
    public $groupId;

    /**
     * @example 0AA90E87-3506-5AA6-AFFB-A4D53B4F6231
     *
     * @var string
     */
    public $requestId;

    /**
     * @example xxx-cn-hangzhou.alicloudapi.com
     *
     * @var string
     */
    public $subDomain;
    protected $_name = [
        'domainBindingStatus'   => 'DomainBindingStatus',
        'domainLegalStatus'     => 'DomainLegalStatus',
        'domainName'            => 'DomainName',
        'domainRemark'          => 'DomainRemark',
        'domainWebSocketStatus' => 'DomainWebSocketStatus',
        'groupId'               => 'GroupId',
        'requestId'             => 'RequestId',
        'subDomain'             => 'SubDomain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainBindingStatus) {
            $res['DomainBindingStatus'] = $this->domainBindingStatus;
        }
        if (null !== $this->domainLegalStatus) {
            $res['DomainLegalStatus'] = $this->domainLegalStatus;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainRemark) {
            $res['DomainRemark'] = $this->domainRemark;
        }
        if (null !== $this->domainWebSocketStatus) {
            $res['DomainWebSocketStatus'] = $this->domainWebSocketStatus;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDomainResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainBindingStatus'])) {
            $model->domainBindingStatus = $map['DomainBindingStatus'];
        }
        if (isset($map['DomainLegalStatus'])) {
            $model->domainLegalStatus = $map['DomainLegalStatus'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainRemark'])) {
            $model->domainRemark = $map['DomainRemark'];
        }
        if (isset($map['DomainWebSocketStatus'])) {
            $model->domainWebSocketStatus = $map['DomainWebSocketStatus'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }

        return $model;
    }
}
