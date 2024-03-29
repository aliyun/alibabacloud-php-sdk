<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class GetMigrationVerifyCodeRequest extends Model
{
    /**
     * @example 293483938849493
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @example zh_CN
     *
     * @var string
     */
    public $locale;

    /**
     * @example sms
     *
     * @var string
     */
    public $method;

    /**
     * @example 8613800001234
     *
     * @var string
     */
    public $phoneNumber;
    protected $_name = [
        'custSpaceId' => 'CustSpaceId',
        'locale'      => 'Locale',
        'method'      => 'Method',
        'phoneNumber' => 'PhoneNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }
        if (null !== $this->locale) {
            $res['Locale'] = $this->locale;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMigrationVerifyCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }
        if (isset($map['Locale'])) {
            $model->locale = $map['Locale'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }

        return $model;
    }
}
