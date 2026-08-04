<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class QueryAgAccountLoginPermissionRequest extends Model
{
    /**
     * @var string
     */
    public $agAccountType;

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
    public $pk;
    protected $_name = [
        'agAccountType' => 'AgAccountType',
        'appName' => 'AppName',
        'mpk' => 'Mpk',
        'pk' => 'Pk',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agAccountType) {
            $res['AgAccountType'] = $this->agAccountType;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->mpk) {
            $res['Mpk'] = $this->mpk;
        }

        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
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
        if (isset($map['AgAccountType'])) {
            $model->agAccountType = $map['AgAccountType'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['Mpk'])) {
            $model->mpk = $map['Mpk'];
        }

        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }

        return $model;
    }
}
