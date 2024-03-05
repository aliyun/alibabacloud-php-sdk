<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CarbonFootprint\V20230711\Models\VerifyResponseBody;

use AlibabaCloud\SDK\CarbonFootprint\V20230711\Models\VerifyResponseBody\data\allMultiAccountUids;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $allowedUids;

    /**
     * @var int
     */
    public $accountType;

    /**
     * @var allMultiAccountUids[]
     */
    public $allMultiAccountUids;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $multiAccountsAllow;
    protected $_name = [
        'allowedUids'         => 'AllowedUids',
        'accountType'         => 'accountType',
        'allMultiAccountUids' => 'allMultiAccountUids',
        'code'                => 'code',
        'message'             => 'message',
        'multiAccountsAllow'  => 'multiAccountsAllow',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowedUids) {
            $res['AllowedUids'] = $this->allowedUids;
        }
        if (null !== $this->accountType) {
            $res['accountType'] = $this->accountType;
        }
        if (null !== $this->allMultiAccountUids) {
            $res['allMultiAccountUids'] = [];
            if (null !== $this->allMultiAccountUids && \is_array($this->allMultiAccountUids)) {
                $n = 0;
                foreach ($this->allMultiAccountUids as $item) {
                    $res['allMultiAccountUids'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->multiAccountsAllow) {
            $res['multiAccountsAllow'] = $this->multiAccountsAllow;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowedUids'])) {
            if (!empty($map['AllowedUids'])) {
                $model->allowedUids = $map['AllowedUids'];
            }
        }
        if (isset($map['accountType'])) {
            $model->accountType = $map['accountType'];
        }
        if (isset($map['allMultiAccountUids'])) {
            if (!empty($map['allMultiAccountUids'])) {
                $model->allMultiAccountUids = [];
                $n                          = 0;
                foreach ($map['allMultiAccountUids'] as $item) {
                    $model->allMultiAccountUids[$n++] = null !== $item ? allMultiAccountUids::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['multiAccountsAllow'])) {
            $model->multiAccountsAllow = $map['multiAccountsAllow'];
        }

        return $model;
    }
}
