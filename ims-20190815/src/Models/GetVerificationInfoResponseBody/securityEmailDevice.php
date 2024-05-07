<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetVerificationInfoResponseBody;

use AlibabaCloud\Tea\Model;

class securityEmailDevice extends Model
{
    /**
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @example active
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'email'  => 'Email',
        'status' => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityEmailDevice
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
