<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trustedserver\V20200613\Models\VerifyMessageResponseBody\data;

use AlibabaCloud\Tea\Model;

class imaVerificationResult extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string[]
     */
    public $tcbObsolete;

    /**
     * @var string[]
     */
    public $untrusted;
    protected $_name = [
        'code'        => 'Code',
        'status'      => 'Status',
        'tcbObsolete' => 'TcbObsolete',
        'untrusted'   => 'Untrusted',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tcbObsolete) {
            $res['TcbObsolete'] = $this->tcbObsolete;
        }
        if (null !== $this->untrusted) {
            $res['Untrusted'] = $this->untrusted;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imaVerificationResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TcbObsolete'])) {
            if (!empty($map['TcbObsolete'])) {
                $model->tcbObsolete = $map['TcbObsolete'];
            }
        }
        if (isset($map['Untrusted'])) {
            if (!empty($map['Untrusted'])) {
                $model->untrusted = $map['Untrusted'];
            }
        }

        return $model;
    }
}
