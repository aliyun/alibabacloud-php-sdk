<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\ListDashboardUidResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $num;

    /**
     * @var string[]
     */
    public $uid;
    protected $_name = [
        'num' => 'Num',
        'uid' => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->num) {
            $res['Num'] = $this->num;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }
        if (isset($map['Uid'])) {
            if (!empty($map['Uid'])) {
                $model->uid = $map['Uid'];
            }
        }

        return $model;
    }
}
