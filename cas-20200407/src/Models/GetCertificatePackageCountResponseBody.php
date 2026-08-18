<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Dara\Model;

class GetCertificatePackageCountResponseBody extends Model
{
    /**
     * @var string
     */
    public $noticeCountDetail;

    /**
     * @var string
     */
    public $productCountList;

    /**
     * @var string
     */
    public $proxyCountDetail;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $totalCountDetail;

    /**
     * @var string
     */
    public $trusteeCountDetail;
    protected $_name = [
        'noticeCountDetail' => 'NoticeCountDetail',
        'productCountList' => 'ProductCountList',
        'proxyCountDetail' => 'ProxyCountDetail',
        'requestId' => 'RequestId',
        'totalCountDetail' => 'TotalCountDetail',
        'trusteeCountDetail' => 'TrusteeCountDetail',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->noticeCountDetail) {
            $res['NoticeCountDetail'] = $this->noticeCountDetail;
        }

        if (null !== $this->productCountList) {
            $res['ProductCountList'] = $this->productCountList;
        }

        if (null !== $this->proxyCountDetail) {
            $res['ProxyCountDetail'] = $this->proxyCountDetail;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCountDetail) {
            $res['TotalCountDetail'] = $this->totalCountDetail;
        }

        if (null !== $this->trusteeCountDetail) {
            $res['TrusteeCountDetail'] = $this->trusteeCountDetail;
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
        if (isset($map['NoticeCountDetail'])) {
            $model->noticeCountDetail = $map['NoticeCountDetail'];
        }

        if (isset($map['ProductCountList'])) {
            $model->productCountList = $map['ProductCountList'];
        }

        if (isset($map['ProxyCountDetail'])) {
            $model->proxyCountDetail = $map['ProxyCountDetail'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCountDetail'])) {
            $model->totalCountDetail = $map['TotalCountDetail'];
        }

        if (isset($map['TrusteeCountDetail'])) {
            $model->trusteeCountDetail = $map['TrusteeCountDetail'];
        }

        return $model;
    }
}
