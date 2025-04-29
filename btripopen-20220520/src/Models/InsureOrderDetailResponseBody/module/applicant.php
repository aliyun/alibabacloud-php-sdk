<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderDetailResponseBody\module;

use AlibabaCloud\Dara\Model;

class applicant extends Model
{
    /**
     * @var string
     */
    public $certName;

    /**
     * @var string
     */
    public $certNo;

    /**
     * @var string
     */
    public $certType;

    /**
     * @var string
     */
    public $phone;
    protected $_name = [
        'certName' => 'cert_name',
        'certNo' => 'cert_no',
        'certType' => 'cert_type',
        'phone' => 'phone',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certName) {
            $res['cert_name'] = $this->certName;
        }

        if (null !== $this->certNo) {
            $res['cert_no'] = $this->certNo;
        }

        if (null !== $this->certType) {
            $res['cert_type'] = $this->certType;
        }

        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
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
        if (isset($map['cert_name'])) {
            $model->certName = $map['cert_name'];
        }

        if (isset($map['cert_no'])) {
            $model->certNo = $map['cert_no'];
        }

        if (isset($map['cert_type'])) {
            $model->certType = $map['cert_type'];
        }

        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }

        return $model;
    }
}
