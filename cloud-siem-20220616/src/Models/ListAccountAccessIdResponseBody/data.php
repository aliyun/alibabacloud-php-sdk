<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListAccountAccessIdResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example ABCXXXXXXXX
     *
     * @var string
     */
    public $accessId;

    /**
     * @example abcXXXXXXXX
     *
     * @var string
     */
    public $accessIdMd5;

    /**
     * @example 123xxxxxxx
     *
     * @var string
     */
    public $accountId;

    /**
     * @example 123xxxxxx|xxxx|ABCXXXXX
     *
     * @var string
     */
    public $accountStr;

    /**
     * @example 123xxxxxx|xxxx|ABCXXXXX
     *
     * @var int
     */
    public $bound;

    /**
     * @example hcloud
     *
     * @var string
     */
    public $cloudCode;

    /**
     * @example ABCXXXXXXXX
     *
     * @var int
     */
    public $subUserId;
    protected $_name = [
        'accessId'    => 'AccessId',
        'accessIdMd5' => 'AccessIdMd5',
        'accountId'   => 'AccountId',
        'accountStr'  => 'AccountStr',
        'bound'       => 'Bound',
        'cloudCode'   => 'CloudCode',
        'subUserId'   => 'SubUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessId) {
            $res['AccessId'] = $this->accessId;
        }
        if (null !== $this->accessIdMd5) {
            $res['AccessIdMd5'] = $this->accessIdMd5;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->accountStr) {
            $res['AccountStr'] = $this->accountStr;
        }
        if (null !== $this->bound) {
            $res['Bound'] = $this->bound;
        }
        if (null !== $this->cloudCode) {
            $res['CloudCode'] = $this->cloudCode;
        }
        if (null !== $this->subUserId) {
            $res['SubUserId'] = $this->subUserId;
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
        if (isset($map['AccessId'])) {
            $model->accessId = $map['AccessId'];
        }
        if (isset($map['AccessIdMd5'])) {
            $model->accessIdMd5 = $map['AccessIdMd5'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AccountStr'])) {
            $model->accountStr = $map['AccountStr'];
        }
        if (isset($map['Bound'])) {
            $model->bound = $map['Bound'];
        }
        if (isset($map['CloudCode'])) {
            $model->cloudCode = $map['CloudCode'];
        }
        if (isset($map['SubUserId'])) {
            $model->subUserId = $map['SubUserId'];
        }

        return $model;
    }
}
