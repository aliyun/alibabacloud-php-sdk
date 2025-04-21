<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\MobileOnlineTimeResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $bizCode;

    /**
     * @var string
     */
    public $ispName;

    /**
     * @var string
     */
    public $timeCode;
    protected $_name = [
        'bizCode' => 'BizCode',
        'ispName' => 'IspName',
        'timeCode' => 'TimeCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }

        if (null !== $this->ispName) {
            $res['IspName'] = $this->ispName;
        }

        if (null !== $this->timeCode) {
            $res['TimeCode'] = $this->timeCode;
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
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }

        if (isset($map['IspName'])) {
            $model->ispName = $map['IspName'];
        }

        if (isset($map['TimeCode'])) {
            $model->timeCode = $map['TimeCode'];
        }

        return $model;
    }
}
