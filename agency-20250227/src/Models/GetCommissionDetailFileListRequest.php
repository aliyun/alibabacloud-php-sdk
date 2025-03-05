<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20250227\Models;

use AlibabaCloud\Dara\Model;

class GetCommissionDetailFileListRequest extends Model
{
    /**
     * @var string
     */
    public $billMonth;
    protected $_name = [
        'billMonth' => 'BillMonth',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billMonth) {
            $res['BillMonth'] = $this->billMonth;
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
        if (isset($map['BillMonth'])) {
            $model->billMonth = $map['BillMonth'];
        }

        return $model;
    }
}
