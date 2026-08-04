<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class FindFinanceTaxDetailRequest extends Model
{
    /**
     * @var int
     */
    public $kpId;
    protected $_name = [
        'kpId' => 'KpId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->kpId) {
            $res['KpId'] = $this->kpId;
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
        if (isset($map['KpId'])) {
            $model->kpId = $map['KpId'];
        }

        return $model;
    }
}
