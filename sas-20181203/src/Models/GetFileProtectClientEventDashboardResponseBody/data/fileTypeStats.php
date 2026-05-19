<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetFileProtectClientEventDashboardResponseBody\data;

use AlibabaCloud\Dara\Model;

class fileTypeStats extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var int
     */
    public $num;
    protected $_name = [
        'key' => 'Key',
        'num' => 'Num',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->num) {
            $res['Num'] = $this->num;
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
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }

        return $model;
    }
}
