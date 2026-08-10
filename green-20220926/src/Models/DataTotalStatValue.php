<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class DataTotalStatValue extends Model
{
    /**
     * @var int
     */
    public $total;

    /**
     * @var string
     */
    public $share;
    protected $_name = [
        'total' => 'Total',
        'share' => 'Share',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        if (null !== $this->share) {
            $res['Share'] = $this->share;
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
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        if (isset($map['Share'])) {
            $model->share = $map['Share'];
        }

        return $model;
    }
}
