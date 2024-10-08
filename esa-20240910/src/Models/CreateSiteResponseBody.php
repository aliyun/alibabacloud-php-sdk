<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateSiteResponseBody extends Model
{
    /**
     * @example ns1.example.com,ns2.example.com
     *
     * @var string
     */
    public $nameServerList;

    /**
     * @example CB1A380B-09F0-41BB-3C82-72F8FD6DA2FE
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1234567890123
     *
     * @var int
     */
    public $siteId;

    /**
     * @example verify_aah9dioasmov****
     *
     * @var string
     */
    public $verifyCode;
    protected $_name = [
        'nameServerList' => 'NameServerList',
        'requestId'      => 'RequestId',
        'siteId'         => 'SiteId',
        'verifyCode'     => 'VerifyCode',
    ];

    public function validate()
    {
    }

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
