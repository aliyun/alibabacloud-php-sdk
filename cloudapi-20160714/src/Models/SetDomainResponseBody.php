<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class SetDomainResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $domainLegalStatus;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $subDomain;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $domainBindingStatus;

    /**
     * @var string
     */
    public $domainRemark;

    /**
     * @var string
     */
    public $domainWebSocketStatus;
    protected $_name = [
        'requestId'             => 'RequestId',
        'domainLegalStatus'     => 'DomainLegalStatus',
        'groupId'               => 'GroupId',
        'subDomain'             => 'SubDomain',
        'domainName'            => 'DomainName',
        'domainBindingStatus'   => 'DomainBindingStatus',
        'domainRemark'          => 'DomainRemark',
        'domainWebSocketStatus' => 'DomainWebSocketStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->domainLegalStatus) {
            $res['DomainLegalStatus'] = $this->domainLegalStatus;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainBindingStatus) {
            $res['DomainBindingStatus'] = $this->domainBindingStatus;
        }
        if (null !== $this->domainRemark) {
            $res['DomainRemark'] = $this->domainRemark;
        }
        if (null !== $this->domainWebSocketStatus) {
            $res['DomainWebSocketStatus'] = $this->domainWebSocketStatus;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainLegalStatus'])) {
            $model->domainLegalStatus = $map['DomainLegalStatus'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainBindingStatus'])) {
            $model->domainBindingStatus = $map['DomainBindingStatus'];
        }
        if (isset($map['DomainRemark'])) {
            $model->domainRemark = $map['DomainRemark'];
        }
        if (isset($map['DomainWebSocketStatus'])) {
            $model->domainWebSocketStatus = $map['DomainWebSocketStatus'];
        }

        return $model;
    }
}
