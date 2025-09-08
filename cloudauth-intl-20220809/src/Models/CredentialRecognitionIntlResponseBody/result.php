<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CredentialRecognitionIntlResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $extIdInfo;

    /**
     * @var string
     */
    public $subCode;

    /**
     * @var string
     */
    public $success;
    protected $_name = [
        'extIdInfo' => 'ExtIdInfo',
        'subCode' => 'SubCode',
        'success' => 'Success',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extIdInfo) {
            $res['ExtIdInfo'] = $this->extIdInfo;
        }

        if (null !== $this->subCode) {
            $res['SubCode'] = $this->subCode;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['ExtIdInfo'])) {
            $model->extIdInfo = $map['ExtIdInfo'];
        }

        if (isset($map['SubCode'])) {
            $model->subCode = $map['SubCode'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
