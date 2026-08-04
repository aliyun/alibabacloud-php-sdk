<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class QueryAccountAddressInfoWithoutHavanaRequest extends Model
{
    /**
     * @var string
     */
    public $addressVersion;

    /**
     * @var string
     */
    public $havanaId;

    /**
     * @var string
     */
    public $PK;
    protected $_name = [
        'addressVersion' => 'AddressVersion',
        'havanaId' => 'HavanaId',
        'PK' => 'PK',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addressVersion) {
            $res['AddressVersion'] = $this->addressVersion;
        }

        if (null !== $this->havanaId) {
            $res['HavanaId'] = $this->havanaId;
        }

        if (null !== $this->PK) {
            $res['PK'] = $this->PK;
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
        if (isset($map['AddressVersion'])) {
            $model->addressVersion = $map['AddressVersion'];
        }

        if (isset($map['HavanaId'])) {
            $model->havanaId = $map['HavanaId'];
        }

        if (isset($map['PK'])) {
            $model->PK = $map['PK'];
        }

        return $model;
    }
}
