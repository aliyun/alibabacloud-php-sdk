<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsAppKeyResponseBody;

use AlibabaCloud\Tea\Model;

class appKey extends Model
{
    /**
     * @var string
     */
    public $appKeyId;

    /**
     * @var string
     */
    public $appKeySecret;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'appKeyId'     => 'AppKeyId',
        'appKeySecret' => 'AppKeySecret',
        'createDate'   => 'CreateDate',
        'state'        => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKeyId) {
            $res['AppKeyId'] = $this->appKeyId;
        }
        if (null !== $this->appKeySecret) {
            $res['AppKeySecret'] = $this->appKeySecret;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appKey
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKeyId'])) {
            $model->appKeyId = $map['AppKeyId'];
        }
        if (isset($map['AppKeySecret'])) {
            $model->appKeySecret = $map['AppKeySecret'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
