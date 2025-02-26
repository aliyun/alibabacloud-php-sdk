<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainDetailResponseBody\certDetail;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainDetailResponseBody\listen;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainDetailResponseBody\redirect;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainDetailResponseBody\SM2CertDetail;

class DescribeDomainDetailResponseBody extends Model
{
    /**
     * @var certDetail
     */
    public $certDetail;
    /**
     * @var string
     */
    public $cname;
    /**
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
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $resourceManagerResourceGroupId;
    /**
     * @var SM2CertDetail
     */
    public $SM2CertDetail;
    /**
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
        if (null !== $this->certDetail) {
            $this->certDetail->validate();
        }
        if (null !== $this->listen) {
            $this->listen->validate();
        }
        if (null !== $this->redirect) {
            $this->redirect->validate();
        }
        if (null !== $this->SM2CertDetail) {
            $this->SM2CertDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certDetail) {
            $res['CertDetail'] = null !== $this->certDetail ? $this->certDetail->toArray($noStream) : $this->certDetail;
        }

        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->listen) {
            $res['Listen'] = null !== $this->listen ? $this->listen->toArray($noStream) : $this->listen;
        }

        if (null !== $this->redirect) {
            $res['Redirect'] = null !== $this->redirect ? $this->redirect->toArray($noStream) : $this->redirect;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }

        if (null !== $this->SM2CertDetail) {
            $res['SM2CertDetail'] = null !== $this->SM2CertDetail ? $this->SM2CertDetail->toArray($noStream) : $this->SM2CertDetail;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
