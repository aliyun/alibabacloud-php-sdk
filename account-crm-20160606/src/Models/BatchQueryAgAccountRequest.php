<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class BatchQueryAgAccountRequest extends Model
{
    /**
     * @var string
     */
    public $mpk;

    /**
     * @var string
     */
    public $pkList;
    protected $_name = [
        'mpk' => 'Mpk',
        'pkList' => 'PkList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mpk) {
            $res['Mpk'] = $this->mpk;
        }

        if (null !== $this->pkList) {
            $res['PkList'] = $this->pkList;
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
        if (isset($map['Mpk'])) {
            $model->mpk = $map['Mpk'];
        }

        if (isset($map['PkList'])) {
            $model->pkList = $map['PkList'];
        }

        return $model;
    }
}
