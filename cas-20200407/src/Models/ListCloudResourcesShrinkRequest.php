<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class ListCloudResourcesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $certIdsShrink;

    /**
     * @description The cloud service provider.
     *
     * Valid values:
     *
     *   Tencent: Tencent Cloud
     *   aliyun: Alibaba Cloud
     *
     * @example Tencent
     *
     * @var string
     */
    public $cloudName;

    /**
     * @description The cloud service. Only Content Delivery Network (CDN) is supported for Tencent Cloud.
     *
     * @example SLB
     *
     * @var string
     */
    public $cloudProduct;

    /**
     * @description The page number. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The domain name bound to the cloud resource.
     *
     * @example cert-instanceId
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The AccessKey ID used to access cloud resources.
     *
     * @example 21
     *
     * @var string
     */
    public $secretId;

    /**
     * @description The number of revoked certificates per page. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $showSize;
    protected $_name = [
        'certIdsShrink' => 'CertIds',
        'cloudName'     => 'CloudName',
        'cloudProduct'  => 'CloudProduct',
        'currentPage'   => 'CurrentPage',
        'keyword'       => 'Keyword',
        'secretId'      => 'SecretId',
        'showSize'      => 'ShowSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certIdsShrink) {
            $res['CertIds'] = $this->certIdsShrink;
        }
        if (null !== $this->cloudName) {
            $res['CloudName'] = $this->cloudName;
        }
        if (null !== $this->cloudProduct) {
            $res['CloudProduct'] = $this->cloudProduct;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->secretId) {
            $res['SecretId'] = $this->secretId;
        }
        if (null !== $this->showSize) {
            $res['ShowSize'] = $this->showSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCloudResourcesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertIds'])) {
            $model->certIdsShrink = $map['CertIds'];
        }
        if (isset($map['CloudName'])) {
            $model->cloudName = $map['CloudName'];
        }
        if (isset($map['CloudProduct'])) {
            $model->cloudProduct = $map['CloudProduct'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['SecretId'])) {
            $model->secretId = $map['SecretId'];
        }
        if (isset($map['ShowSize'])) {
            $model->showSize = $map['ShowSize'];
        }

        return $model;
    }
}
