<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainDetailResponseBody\certDetail;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainDetailResponseBody\listen;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainDetailResponseBody\redirect;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainDetailResponseBody\SM2CertDetail;
use AlibabaCloud\Tea\Model;

class DescribeDomainDetailResponseBody extends Model
{
    /**
     * @var certDetail
     */
    public $certDetail;

    /**
     * @example xxxxxcvdaf.****.com
     *
     * @var string
     */
    public $cname;

    /**
     * @example www.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @var listen
     */
    public $listen;

    /**
     * @var redirect
     */
    public $redirect;

    /**
     * @example BAEF9CA9-66A0-533E-BD09-5D5D7AA8ADE7
     *
     * @var string
     */
    public $requestId;

    /**
     * @example rg-acfm***q
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @var SM2CertDetail
     */
    public $SM2CertDetail;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'certDetail'                     => 'CertDetail',
        'cname'                          => 'Cname',
        'domain'                         => 'Domain',
        'listen'                         => 'Listen',
        'redirect'                       => 'Redirect',
        'requestId'                      => 'RequestId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'SM2CertDetail'                  => 'SM2CertDetail',
        'status'                         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certDetail) {
            $res['CertDetail'] = null !== $this->certDetail ? $this->certDetail->toMap() : null;
        }
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->listen) {
            $res['Listen'] = null !== $this->listen ? $this->listen->toMap() : null;
        }
        if (null !== $this->redirect) {
            $res['Redirect'] = null !== $this->redirect ? $this->redirect->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }
        if (null !== $this->SM2CertDetail) {
            $res['SM2CertDetail'] = null !== $this->SM2CertDetail ? $this->SM2CertDetail->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertDetail'])) {
            $model->certDetail = certDetail::fromMap($map['CertDetail']);
        }
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Listen'])) {
            $model->listen = listen::fromMap($map['Listen']);
        }
        if (isset($map['Redirect'])) {
            $model->redirect = redirect::fromMap($map['Redirect']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }
        if (isset($map['SM2CertDetail'])) {
            $model->SM2CertDetail = SM2CertDetail::fromMap($map['SM2CertDetail']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
