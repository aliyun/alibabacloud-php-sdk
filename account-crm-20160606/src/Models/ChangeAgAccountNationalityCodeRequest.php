<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class ChangeAgAccountNationalityCodeRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $mpk;

    /**
     * @var string
     */
    public $nationalityCode;

    /**
     * @var string
     */
    public $PK;
    protected $_name = [
        'appName' => 'AppName',
        'mpk' => 'Mpk',
        'nationalityCode' => 'NationalityCode',
        'PK' => 'PK',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->mpk) {
            $res['Mpk'] = $this->mpk;
        }

        if (null !== $this->nationalityCode) {
            $res['NationalityCode'] = $this->nationalityCode;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['Mpk'])) {
            $model->mpk = $map['Mpk'];
        }

        if (isset($map['NationalityCode'])) {
            $model->nationalityCode = $map['NationalityCode'];
        }

        if (isset($map['PK'])) {
            $model->PK = $map['PK'];
        }

        return $model;
    }
}
