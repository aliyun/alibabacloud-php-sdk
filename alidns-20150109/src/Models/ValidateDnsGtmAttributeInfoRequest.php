<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class ValidateDnsGtmAttributeInfoRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $userClientIp;

    /**
     * @var string
     */
    public $lineCode;
    protected $_name = [
        'lang'         => 'Lang',
        'userClientIp' => 'UserClientIp',
        'lineCode'     => 'LineCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->lineCode) {
            $res['LineCode'] = $this->lineCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ValidateDnsGtmAttributeInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['LineCode'])) {
            $model->lineCode = $map['LineCode'];
        }

        return $model;
    }
}
