<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateSiteResponseBody extends Model
{
    /**
     * @description The nameservers assigned by ESA. The values are separated by commas (,). This parameter is returned if you set AccessType to NS. In this case, you must change the nameservers of your domain to the assigned ones. Then, you can verify the domain ownership and activate your website.
     *
     * @example ns1.example.com,ns2.example.com
     *
     * @var string
     */
    public $nameServerList;

    /**
     * @description The request ID.
     *
     * @example CB1A380B-09F0-41BB-3C82-72F8FD6DA2FE
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The website ID.
     *
     * @example 1234567890123
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The verification code for the website. If you set AccessType to CNAME, you need to add a TXT record whose hostname is **_esaauth.[websiteDomainName]** and record value is the value of VerifyCode to the DNS records of your domain. ****Then, you can verify the domain ownership and activate your website.
     *
     * @example verify_aah9dioasmov****
     *
     * @var string
     */
    public $verifyCode;
    protected $_name = [
        'nameServerList' => 'NameServerList',
        'requestId' => 'RequestId',
        'siteId' => 'SiteId',
        'verifyCode' => 'VerifyCode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nameServerList) {
            $res['NameServerList'] = $this->nameServerList;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->verifyCode) {
            $res['VerifyCode'] = $this->verifyCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSiteResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NameServerList'])) {
            $model->nameServerList = $map['NameServerList'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['VerifyCode'])) {
            $model->verifyCode = $map['VerifyCode'];
        }

        return $model;
    }
}
