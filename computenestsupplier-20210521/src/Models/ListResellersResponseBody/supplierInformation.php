<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListResellersResponseBody;

use AlibabaCloud\Dara\Model;

class supplierInformation extends Model
{
    /**
     * @var string
     */
    public $supplierDesc;
    /**
     * @var string
     */
    public $supplierLogo;
    /**
     * @var string
     */
    public $supplierName;
    /**
     * @var int
     */
    public $supplierUid;
    /**
     * @var string
     */
    public $supplierUrl;
    protected $_name = [
        'supplierDesc' => 'SupplierDesc',
        'supplierLogo' => 'SupplierLogo',
        'supplierName' => 'SupplierName',
        'supplierUid'  => 'SupplierUid',
        'supplierUrl'  => 'SupplierUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
