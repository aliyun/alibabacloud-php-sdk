<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class DescribeWebsiteVerifyInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $cname;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $hostFile;

    /**
     * @var string
     */
    public $indexPage;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $verifyMethod;
    protected $_name = [
        'cname'        => 'Cname',
        'domain'       => 'Domain',
        'hostFile'     => 'HostFile',
        'indexPage'    => 'IndexPage',
        'protocol'     => 'Protocol',
        'requestId'    => 'RequestId',
        'verifyMethod' => 'VerifyMethod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->hostFile) {
            $res['HostFile'] = $this->hostFile;
        }
        if (null !== $this->indexPage) {
            $res['IndexPage'] = $this->indexPage;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->verifyMethod) {
            $res['VerifyMethod'] = $this->verifyMethod;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWebsiteVerifyInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['HostFile'])) {
            $model->hostFile = $map['HostFile'];
        }
        if (isset($map['IndexPage'])) {
            $model->indexPage = $map['IndexPage'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VerifyMethod'])) {
            $model->verifyMethod = $map['VerifyMethod'];
        }

        return $model;
    }
}
