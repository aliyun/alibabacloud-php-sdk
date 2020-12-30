<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class DescDomainResponseBody extends Model
{
    /**
     * @var string
     */
    public $spfRecord;

    /**
     * @var string
     */
    public $spfAuthStatus;

    /**
     * @var string
     */
    public $cnameAuthStatus;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $dnsMx;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $cnameRecord;

    /**
     * @var string
     */
    public $dnsTxt;

    /**
     * @var string
     */
    public $cnameConfirmStatus;

    /**
     * @var string
     */
    public $icpStatus;

    /**
     * @var string
     */
    public $defaultDomain;

    /**
     * @var string
     */
    public $dnsSpf;

    /**
     * @var string
     */
    public $mxRecord;

    /**
     * @var string
     */
    public $domainId;

    /**
     * @var string
     */
    public $domainType;

    /**
     * @var string
     */
    public $mxAuthStatus;

    /**
     * @var string
     */
    public $tlDomainName;

    /**
     * @var string
     */
    public $tracefRecord;

    /**
     * @var string
     */
    public $domainStatus;
    protected $_name = [
        'spfRecord'          => 'SpfRecord',
        'spfAuthStatus'      => 'SpfAuthStatus',
        'cnameAuthStatus'    => 'CnameAuthStatus',
        'requestId'          => 'RequestId',
        'domainName'         => 'DomainName',
        'dnsMx'              => 'DnsMx',
        'createTime'         => 'CreateTime',
        'cnameRecord'        => 'CnameRecord',
        'dnsTxt'             => 'DnsTxt',
        'cnameConfirmStatus' => 'CnameConfirmStatus',
        'icpStatus'          => 'IcpStatus',
        'defaultDomain'      => 'DefaultDomain',
        'dnsSpf'             => 'DnsSpf',
        'mxRecord'           => 'MxRecord',
        'domainId'           => 'DomainId',
        'domainType'         => 'DomainType',
        'mxAuthStatus'       => 'MxAuthStatus',
        'tlDomainName'       => 'TlDomainName',
        'tracefRecord'       => 'TracefRecord',
        'domainStatus'       => 'DomainStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spfRecord) {
            $res['SpfRecord'] = $this->spfRecord;
        }
        if (null !== $this->spfAuthStatus) {
            $res['SpfAuthStatus'] = $this->spfAuthStatus;
        }
        if (null !== $this->cnameAuthStatus) {
            $res['CnameAuthStatus'] = $this->cnameAuthStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->dnsMx) {
            $res['DnsMx'] = $this->dnsMx;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->cnameRecord) {
            $res['CnameRecord'] = $this->cnameRecord;
        }
        if (null !== $this->dnsTxt) {
            $res['DnsTxt'] = $this->dnsTxt;
        }
        if (null !== $this->cnameConfirmStatus) {
            $res['CnameConfirmStatus'] = $this->cnameConfirmStatus;
        }
        if (null !== $this->icpStatus) {
            $res['IcpStatus'] = $this->icpStatus;
        }
        if (null !== $this->defaultDomain) {
            $res['DefaultDomain'] = $this->defaultDomain;
        }
        if (null !== $this->dnsSpf) {
            $res['DnsSpf'] = $this->dnsSpf;
        }
        if (null !== $this->mxRecord) {
            $res['MxRecord'] = $this->mxRecord;
        }
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }
        if (null !== $this->domainType) {
            $res['DomainType'] = $this->domainType;
        }
        if (null !== $this->mxAuthStatus) {
            $res['MxAuthStatus'] = $this->mxAuthStatus;
        }
        if (null !== $this->tlDomainName) {
            $res['TlDomainName'] = $this->tlDomainName;
        }
        if (null !== $this->tracefRecord) {
            $res['TracefRecord'] = $this->tracefRecord;
        }
        if (null !== $this->domainStatus) {
            $res['DomainStatus'] = $this->domainStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescDomainResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpfRecord'])) {
            $model->spfRecord = $map['SpfRecord'];
        }
        if (isset($map['SpfAuthStatus'])) {
            $model->spfAuthStatus = $map['SpfAuthStatus'];
        }
        if (isset($map['CnameAuthStatus'])) {
            $model->cnameAuthStatus = $map['CnameAuthStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DnsMx'])) {
            $model->dnsMx = $map['DnsMx'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CnameRecord'])) {
            $model->cnameRecord = $map['CnameRecord'];
        }
        if (isset($map['DnsTxt'])) {
            $model->dnsTxt = $map['DnsTxt'];
        }
        if (isset($map['CnameConfirmStatus'])) {
            $model->cnameConfirmStatus = $map['CnameConfirmStatus'];
        }
        if (isset($map['IcpStatus'])) {
            $model->icpStatus = $map['IcpStatus'];
        }
        if (isset($map['DefaultDomain'])) {
            $model->defaultDomain = $map['DefaultDomain'];
        }
        if (isset($map['DnsSpf'])) {
            $model->dnsSpf = $map['DnsSpf'];
        }
        if (isset($map['MxRecord'])) {
            $model->mxRecord = $map['MxRecord'];
        }
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }
        if (isset($map['DomainType'])) {
            $model->domainType = $map['DomainType'];
        }
        if (isset($map['MxAuthStatus'])) {
            $model->mxAuthStatus = $map['MxAuthStatus'];
        }
        if (isset($map['TlDomainName'])) {
            $model->tlDomainName = $map['TlDomainName'];
        }
        if (isset($map['TracefRecord'])) {
            $model->tracefRecord = $map['TracefRecord'];
        }
        if (isset($map['DomainStatus'])) {
            $model->domainStatus = $map['DomainStatus'];
        }

        return $model;
    }
}
