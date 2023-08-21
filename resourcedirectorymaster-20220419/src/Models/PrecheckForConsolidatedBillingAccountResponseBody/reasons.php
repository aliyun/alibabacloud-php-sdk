<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\PrecheckForConsolidatedBillingAccountResponseBody;

use AlibabaCloud\Tea\Model;

class reasons extends Model
{
    /**
     * @example PaymentAccountEnterpriseInvoiceError
     *
     * @var string
     */
    public $code;

    /**
     * @example No enterprise invoice header information is set for the payment account.
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'code'    => 'Code',
        'message' => 'Message',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reasons
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
