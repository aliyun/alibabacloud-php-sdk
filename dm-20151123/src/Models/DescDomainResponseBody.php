<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class DescDomainResponseBody extends Model
{
    /**
     * @description CNAME verification flag, 0 for success, 1 for failure.
     *
     * @example 1
     *
     * @var string
     */
    public $cnameAuthStatus;

    /**
     * @description Indicates whether the CNAME host record has been modified, 1 for modified (reverting to the original value also counts as modification), 0 for not modified.
     *
     * @example 0
     *
     * @var string
     */
    public $cnameConfirmStatus;

    /**
     * @description Custom part of the CNAME host record
     *
     * @example dmtrace
     *
     * @var string
     */
    public $cnameRecord;

    /**
     * @description Creation time
     *
     * @example 2025-03-19T12:49Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Whether it is the default domain,
     *
     * Value: 0 No (this field is deprecated)
     *
     * @example 0
     *
     * @var string
     */
    public $defaultDomain;

    /**
     * @description DKIM verification flag, indicating whether the DKIM record set by the user in DNS has passed validation, 0: Passed, 1: Not passed
     *
     * @example 0
     *
     * @var string
     */
    public $dkimAuthStatus;

    /**
     * @description DKIM public key value, the value that users need to set for the DKIM record in DNS
     *
     * @example v=DKIM1; k=rsa; p=MIGfMA0GCSqGSI...
     *
     * @var string
     */
    public $dkimPublicKey;

    /**
     * @description DKIM host record, the key that the user needs to set in the DNS for the DKIM record
     *
     * @example aliyun-cn-hangzhou._domainkey.hangzhou26
     *
     * @var string
     */
    public $dkimRR;

    /**
     * @var int
     */
    public $dkimRsaLength;

    /**
     * @description DMARC verification flag, indicating whether the DMARC record set by the user in DNS has passed validation, 0: Passed, 1: Not passed
     *
     * @example 1
     *
     * @var int
     */
    public $dmarcAuthStatus;

    /**
     * @description DMARC host record value
     *
     * @example _dmarc.xxx
     *
     * @var string
     */
    public $dmarcHostRecord;

    /**
     * @description DMARC record value
     *
     * @example v=DMARC1;p=none;rua=mailto:dmarc_report@service.aliyun.com
     *
     * @var string
     */
    public $dmarcRecord;

    /**
     * @description DMARC record value resolved through the public domain name
     *
     * @example v=DMARC1;p=none;rua=mailto:dmarc_report@service.aliyun.com
     *
     * @var string
     */
    public $dnsDmarc;

    /**
     * @description MX record value resolved from the public network domain
     *
     * @example mx01.dm.aliyun.com
     *
     * @var string
     */
    public $dnsMx;

    /**
     * @description SPF record value resolved from the public network domain
     *
     * @example v=xxxx
     *
     * @var string
     */
    public $dnsSpf;

    /**
     * @description Ownership record value resolved from the public network domain
     *
     * @example 0c40d5f125af4e42892a
     *
     * @var string
     */
    public $dnsTxt;

    /**
     * @description Domain ID
     *
     * @example 158910
     *
     * @var string
     */
    public $domainId;

    /**
     * @description Domain name
     *
     * @example test.example.net
     *
     * @var string
     */
    public $domainName;

    /**
     * @description Domain status. Indicates whether the verification was successful, with values:
     *
     * - **0**: Available, verified successfully
     * - **1**: Unavailable, verification failed
     *
     * @example 1
     *
     * @var string
     */
    public $domainStatus;

    /**
     * @description Ownership record provided by the email push console
     *
     * @example 0c40d5f125af4e42892a
     *
     * @var string
     */
    public $domainType;

    /**
     * @description Host record
     *
     * @example xxx
     *
     * @var string
     */
    public $hostRecord;

    /**
     * @description Filing status. **1** indicates filed, **0** indicates not filed.
     *
     * @example 1
     *
     * @var string
     */
    public $icpStatus;

    /**
     * @description MX verification flag, 0 for success, 1 for failure.
     *
     * @example 1
     *
     * @var string
     */
    public $mxAuthStatus;

    /**
     * @description MX record value provided by the email push console
     *
     * @example mx01.dm.aliyun.com
     *
     * @var string
     */
    public $mxRecord;

    /**
     * @description Request ID
     *
     * @example 51B74264-46B4-43C8-A9A0-6B8E8BC04F34
     *
     * @var string
     */
    public $requestId;

    /**
     * @description SPF verification flag, 0 for success, 1 for failure.
     *
     * @example 1
     *
     * @var string
     */
    public $spfAuthStatus;

    /**
     * @description SPF record value provided by the email push console
     *
     * @example include:spf1.dm.aliyun.com
     *
     * @var string
     */
    public $spfRecord;

    /**
     * @description SPF record. Previously, the SPF display content needed to be calculated by the calling end based on the spfRecord in the response. The new field spfRecordV2 replaces spfRecord, and the calling end can directly display this field after obtaining it;
     *
     * @example v=spf1 include:spf1.dm.aliyun.com -all
     *
     * @var string
     */
    public $spfRecordV2;

    /**
     * @description Primary domain
     *
     * @example example.com
     *
     * @var string
     */
    public $tlDomainName;

    /**
     * @description CNAME record value provided by the email push console
     *
     * @example tracedm.aliyuncs.com
     *
     * @var string
     */
    public $tracefRecord;
    protected $_name = [
        'cnameAuthStatus' => 'CnameAuthStatus',
        'cnameConfirmStatus' => 'CnameConfirmStatus',
        'cnameRecord' => 'CnameRecord',
        'createTime' => 'CreateTime',
        'defaultDomain' => 'DefaultDomain',
        'dkimAuthStatus' => 'DkimAuthStatus',
        'dkimPublicKey' => 'DkimPublicKey',
        'dkimRR' => 'DkimRR',
        'dkimRsaLength' => 'DkimRsaLength',
        'dmarcAuthStatus' => 'DmarcAuthStatus',
        'dmarcHostRecord' => 'DmarcHostRecord',
        'dmarcRecord' => 'DmarcRecord',
        'dnsDmarc' => 'DnsDmarc',
        'dnsMx' => 'DnsMx',
        'dnsSpf' => 'DnsSpf',
        'dnsTxt' => 'DnsTxt',
        'domainId' => 'DomainId',
        'domainName' => 'DomainName',
        'domainStatus' => 'DomainStatus',
        'domainType' => 'DomainType',
        'hostRecord' => 'HostRecord',
        'icpStatus' => 'IcpStatus',
        'mxAuthStatus' => 'MxAuthStatus',
        'mxRecord' => 'MxRecord',
        'requestId' => 'RequestId',
        'spfAuthStatus' => 'SpfAuthStatus',
        'spfRecord' => 'SpfRecord',
        'spfRecordV2' => 'SpfRecordV2',
        'tlDomainName' => 'TlDomainName',
        'tracefRecord' => 'TracefRecord',
    ];

    public function validate() {}

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
        if (null !== $this->dkimRsaLength) {
            $res['DkimRsaLength'] = $this->dkimRsaLength;
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
        if (isset($map['DkimRsaLength'])) {
            $model->dkimRsaLength = $map['DkimRsaLength'];
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
