<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class DescDomainResponseBody extends Model
{
    /**
     * @description Track verification
     *
     * @example 1
     *
     * @var string
     */
    public $cnameAuthStatus;

    /**
     * @description CName verification flag, success: 0, failure: 1.
     *
     * @example 0
     *
     * @var string
     */
    public $cnameConfirmStatus;

    /**
     * @description CNAME records
     *
     * @example dmtrace
     *
     * @var string
     */
    public $cnameRecord;

    /**
     * @description Creation time
     *
     * @example 2019-09-29T12:49Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Default domain name
     *
     * @example 0
     *
     * @var string
     */
    public $defaultDomain;

    /**
     * @description DKIM validation flag, success: 0, failure: 1.
     *
     * @example 0
     *
     * @var string
     */
    public $dkimAuthStatus;

    /**
     * @description DKIM public key
     *
     * @example v=DKIM1; k=rsa; p=MIGfMA0GCSqGSI...
     *
     * @var string
     */
    public $dkimPublicKey;

    /**
     * @description DKIM HostRecord
     *
     * @example aliyun-cn-hangzhou._domainkey.hangzhou26
     *
     * @var string
     */
    public $dkimRR;

    /**
     * @description DMARC validation flag, success: 0, failure: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $dmarcAuthStatus;

    /**
     * @description DMARC host record
     *
     * @example _dmarc.xxx
     *
     * @var string
     */
    public $dmarcHostRecord;

    /**
     * @description DMARC record
     *
     * @example v=DMARC1;p=none;rua=mailto:dmarc_report@service.aliyun.com
     *
     * @var string
     */
    public $dmarcRecord;

    /**
     * @description dmarc record value resolved through public DNS
     *
     * @example v=DMARC1;p=none;rua=mailto:dmarc_report@service.aliyun.com
     *
     * @var string
     */
    public $dnsDmarc;

    /**
     * @description MX record value resolved through public DNS
     *
     * @example abc-com.xxxx.com
     *
     * @var string
     */
    public $dnsMx;

    /**
     * @description SPF record value resolved through public DNS
     *
     * @example v=xxxx
     *
     * @var string
     */
    public $dnsSpf;

    /**
     * @description TXT record value resolved through public DNS.
     *
     * @example 121309ohdsa
     *
     * @var string
     */
    public $dnsTxt;

    /**
     * @description The ID of the domain name.
     *
     * @example 158910
     *
     * @var string
     */
    public $domainId;

    /**
     * @description domain
     *
     * @example example.net
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The status of the domain name. Indicates whether the domain name is verified and available. Valid values:
     *
     * 4: indicates that the domain name is available but not configured with a CNAME record.
     * @example 1
     *
     * @var string
     */
    public $domainStatus;

    /**
     * @description TXT records provided by the Direct Mail console.
     *
     * @example 0c40d5f125af4e42892a
     *
     * @var string
     */
    public $domainType;

    /**
     * @description host record
     *
     * @example xxx
     *
     * @var string
     */
    public $hostRecord;

    /**
     * @description Filing status. 1 indicates that it has been filed, and 0 indicates that it has not been filed.
     *
     * @example 1
     *
     * @var string
     */
    public $icpStatus;

    /**
     * @description MX validation flag, success: 0, failure: 1.
     *
     * @example 1
     *
     * @var string
     */
    public $mxAuthStatus;

    /**
     * @description MX record
     *
     * @example mx01.dm.aliyun.com
     *
     * @var string
     */
    public $mxRecord;

    /**
     * @description The ID of the request.
     *
     * @example 51B74264-46B4-43C8-A9A0-6B8E8BC04F34
     *
     * @var string
     */
    public $requestId;

    /**
     * @description SPF validation flag, success: 0, failure: 1.
     *
     * @example 1
     *
     * @var string
     */
    public $spfAuthStatus;

    /**
     * @description Spf record
     *
     * @example include:spf1.dm.aliyun.com
     *
     * @var string
     */
    public $spfRecord;

    /**
     * @description SpfRecord
     *
     * @example v=spf1 include:spf1.dm.aliyun.com -all
     *
     * @var string
     */
    public $spfRecordV2;

    /**
     * @description The primary domain name.
     *
     * @example example.net
     *
     * @var string
     */
    public $tlDomainName;

    /**
     * @description The CNAME verification record provided by the Direct Mail console.
     *
     * @example tracedm.aliyuncs.com
     *
     * @var string
     */
    public $tracefRecord;
    protected $_name = [
        'cnameAuthStatus'    => 'CnameAuthStatus',
        'cnameConfirmStatus' => 'CnameConfirmStatus',
        'cnameRecord'        => 'CnameRecord',
        'createTime'         => 'CreateTime',
        'defaultDomain'      => 'DefaultDomain',
        'dkimAuthStatus'     => 'DkimAuthStatus',
        'dkimPublicKey'      => 'DkimPublicKey',
        'dkimRR'             => 'DkimRR',
        'dmarcAuthStatus'    => 'DmarcAuthStatus',
        'dmarcHostRecord'    => 'DmarcHostRecord',
        'dmarcRecord'        => 'DmarcRecord',
        'dnsDmarc'           => 'DnsDmarc',
        'dnsMx'              => 'DnsMx',
        'dnsSpf'             => 'DnsSpf',
        'dnsTxt'             => 'DnsTxt',
        'domainId'           => 'DomainId',
        'domainName'         => 'DomainName',
        'domainStatus'       => 'DomainStatus',
        'domainType'         => 'DomainType',
        'hostRecord'         => 'HostRecord',
        'icpStatus'          => 'IcpStatus',
        'mxAuthStatus'       => 'MxAuthStatus',
        'mxRecord'           => 'MxRecord',
        'requestId'          => 'RequestId',
        'spfAuthStatus'      => 'SpfAuthStatus',
        'spfRecord'          => 'SpfRecord',
        'spfRecordV2'        => 'SpfRecordV2',
        'tlDomainName'       => 'TlDomainName',
        'tracefRecord'       => 'TracefRecord',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cnameAuthStatus) {
            $res['CnameAuthStatus'] = $this->cnameAuthStatus;
        }
        if (null !== $this->cnameConfirmStatus) {
            $res['CnameConfirmStatus'] = $this->cnameConfirmStatus;
        }
        if (null !== $this->cnameRecord) {
            $res['CnameRecord'] = $this->cnameRecord;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->defaultDomain) {
            $res['DefaultDomain'] = $this->defaultDomain;
        }
        if (null !== $this->dkimAuthStatus) {
            $res['DkimAuthStatus'] = $this->dkimAuthStatus;
        }
        if (null !== $this->dkimPublicKey) {
            $res['DkimPublicKey'] = $this->dkimPublicKey;
        }
        if (null !== $this->dkimRR) {
            $res['DkimRR'] = $this->dkimRR;
        }
        if (null !== $this->dmarcAuthStatus) {
            $res['DmarcAuthStatus'] = $this->dmarcAuthStatus;
        }
        if (null !== $this->dmarcHostRecord) {
            $res['DmarcHostRecord'] = $this->dmarcHostRecord;
        }
        if (null !== $this->dmarcRecord) {
            $res['DmarcRecord'] = $this->dmarcRecord;
        }
        if (null !== $this->dnsDmarc) {
            $res['DnsDmarc'] = $this->dnsDmarc;
        }
        if (null !== $this->dnsMx) {
            $res['DnsMx'] = $this->dnsMx;
        }
        if (null !== $this->dnsSpf) {
            $res['DnsSpf'] = $this->dnsSpf;
        }
        if (null !== $this->dnsTxt) {
            $res['DnsTxt'] = $this->dnsTxt;
        }
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainStatus) {
            $res['DomainStatus'] = $this->domainStatus;
        }
        if (null !== $this->domainType) {
            $res['DomainType'] = $this->domainType;
        }
        if (null !== $this->hostRecord) {
            $res['HostRecord'] = $this->hostRecord;
        }
        if (null !== $this->icpStatus) {
            $res['IcpStatus'] = $this->icpStatus;
        }
        if (null !== $this->mxAuthStatus) {
            $res['MxAuthStatus'] = $this->mxAuthStatus;
        }
        if (null !== $this->mxRecord) {
            $res['MxRecord'] = $this->mxRecord;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->spfAuthStatus) {
            $res['SpfAuthStatus'] = $this->spfAuthStatus;
        }
        if (null !== $this->spfRecord) {
            $res['SpfRecord'] = $this->spfRecord;
        }
        if (null !== $this->spfRecordV2) {
            $res['SpfRecordV2'] = $this->spfRecordV2;
        }
        if (null !== $this->tlDomainName) {
            $res['TlDomainName'] = $this->tlDomainName;
        }
        if (null !== $this->tracefRecord) {
            $res['TracefRecord'] = $this->tracefRecord;
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
        if (isset($map['CnameAuthStatus'])) {
            $model->cnameAuthStatus = $map['CnameAuthStatus'];
        }
        if (isset($map['CnameConfirmStatus'])) {
            $model->cnameConfirmStatus = $map['CnameConfirmStatus'];
        }
        if (isset($map['CnameRecord'])) {
            $model->cnameRecord = $map['CnameRecord'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DefaultDomain'])) {
            $model->defaultDomain = $map['DefaultDomain'];
        }
        if (isset($map['DkimAuthStatus'])) {
            $model->dkimAuthStatus = $map['DkimAuthStatus'];
        }
        if (isset($map['DkimPublicKey'])) {
            $model->dkimPublicKey = $map['DkimPublicKey'];
        }
        if (isset($map['DkimRR'])) {
            $model->dkimRR = $map['DkimRR'];
        }
        if (isset($map['DmarcAuthStatus'])) {
            $model->dmarcAuthStatus = $map['DmarcAuthStatus'];
        }
        if (isset($map['DmarcHostRecord'])) {
            $model->dmarcHostRecord = $map['DmarcHostRecord'];
        }
        if (isset($map['DmarcRecord'])) {
            $model->dmarcRecord = $map['DmarcRecord'];
        }
        if (isset($map['DnsDmarc'])) {
            $model->dnsDmarc = $map['DnsDmarc'];
        }
        if (isset($map['DnsMx'])) {
            $model->dnsMx = $map['DnsMx'];
        }
        if (isset($map['DnsSpf'])) {
            $model->dnsSpf = $map['DnsSpf'];
        }
        if (isset($map['DnsTxt'])) {
            $model->dnsTxt = $map['DnsTxt'];
        }
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainStatus'])) {
            $model->domainStatus = $map['DomainStatus'];
        }
        if (isset($map['DomainType'])) {
            $model->domainType = $map['DomainType'];
        }
        if (isset($map['HostRecord'])) {
            $model->hostRecord = $map['HostRecord'];
        }
        if (isset($map['IcpStatus'])) {
            $model->icpStatus = $map['IcpStatus'];
        }
        if (isset($map['MxAuthStatus'])) {
            $model->mxAuthStatus = $map['MxAuthStatus'];
        }
        if (isset($map['MxRecord'])) {
            $model->mxRecord = $map['MxRecord'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SpfAuthStatus'])) {
            $model->spfAuthStatus = $map['SpfAuthStatus'];
        }
        if (isset($map['SpfRecord'])) {
            $model->spfRecord = $map['SpfRecord'];
        }
        if (isset($map['SpfRecordV2'])) {
            $model->spfRecordV2 = $map['SpfRecordV2'];
        }
        if (isset($map['TlDomainName'])) {
            $model->tlDomainName = $map['TlDomainName'];
        }
        if (isset($map['TracefRecord'])) {
            $model->tracefRecord = $map['TracefRecord'];
        }

        return $model;
    }
}
