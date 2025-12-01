<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeRestoreRangeInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeRestoreRangeInfoResponseBody\items\DBSRecoverRange;

class items extends Model
{
    /**
     * @var DBSRecoverRange[]
     */
    public $DBSRecoverRange;
    protected $_name = [
        'DBSRecoverRange' => 'DBSRecoverRange',
    ];

    public function validate()
    {
        if (\is_array($this->DBSRecoverRange)) {
            Model::validateArray($this->DBSRecoverRange);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBSRecoverRange) {
            if (\is_array($this->DBSRecoverRange)) {
                $res['DBSRecoverRange'] = [];
                $n1 = 0;
                foreach ($this->DBSRecoverRange as $item1) {
                    $res['DBSRecoverRange'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DBSRecoverRange'])) {
            if (!empty($map['DBSRecoverRange'])) {
                $model->DBSRecoverRange = [];
                $n1 = 0;
                foreach ($map['DBSRecoverRange'] as $item1) {
                    $model->DBSRecoverRange[$n1] = DBSRecoverRange::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
