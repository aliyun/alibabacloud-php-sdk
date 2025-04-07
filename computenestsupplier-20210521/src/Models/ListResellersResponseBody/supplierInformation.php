<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListResellersResponseBody;

use AlibabaCloud\Tea\Model;

class supplierInformation extends Model
{
    /**
     * @description The description of distributor.
     *
     * @example It is a XXXX  company
     *
     * @var string
     */
    public $supplierDesc;

    /**
     * @description The Logo of distributor
     *
     * @example https://service-info-public.oss-cn-hangzhou.aliyuncs.com/31978070/service-image/d5c3b585-ff6b-4e4e-8885-xxxx.png
     *
     * @var string
     */
    public $supplierLogo;

    /**
     * @description The name of the distributor
     *
     * @example Distributor A
     *
     * @var string
     */
    public $supplierName;

    /**
     * @description The Alibaba Cloud account ID of the distributor.
     *
     * @example 152xxxxxxxxxxx
     *
     * @var int
     */
    public $supplierUid;

    /**
     * @description The URL of the distributor.
     *
     * @example http://www.aliyun.com
     *
     * @var string
     */
    public $supplierUrl;
    protected $_name = [
        'supplierDesc' => 'SupplierDesc',
        'supplierLogo' => 'SupplierLogo',
        'supplierName' => 'SupplierName',
        'supplierUid' => 'SupplierUid',
        'supplierUrl' => 'SupplierUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->supplierDesc) {
            $res['SupplierDesc'] = $this->supplierDesc;
        }
        if (null !== $this->supplierLogo) {
            $res['SupplierLogo'] = $this->supplierLogo;
        }
        if (null !== $this->supplierName) {
            $res['SupplierName'] = $this->supplierName;
        }
        if (null !== $this->supplierUid) {
            $res['SupplierUid'] = $this->supplierUid;
        }
        if (null !== $this->supplierUrl) {
            $res['SupplierUrl'] = $this->supplierUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supplierInformation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupplierDesc'])) {
            $model->supplierDesc = $map['SupplierDesc'];
        }
        if (isset($map['SupplierLogo'])) {
            $model->supplierLogo = $map['SupplierLogo'];
        }
        if (isset($map['SupplierName'])) {
            $model->supplierName = $map['SupplierName'];
        }
        if (isset($map['SupplierUid'])) {
            $model->supplierUid = $map['SupplierUid'];
        }
        if (isset($map['SupplierUrl'])) {
            $model->supplierUrl = $map['SupplierUrl'];
        }

        return $model;
    }
}
