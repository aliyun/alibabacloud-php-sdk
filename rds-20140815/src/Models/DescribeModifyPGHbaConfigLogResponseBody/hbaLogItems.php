<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeModifyPGHbaConfigLogResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeModifyPGHbaConfigLogResponseBody\hbaLogItems\hbaLogItem;

class hbaLogItems extends Model
{
    /**
     * @var hbaLogItem[]
     */
    public $hbaLogItem;
    protected $_name = [
        'hbaLogItem' => 'HbaLogItem',
    ];

    public function validate()
    {
        if (\is_array($this->hbaLogItem)) {
            Model::validateArray($this->hbaLogItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hbaLogItem) {
            if (\is_array($this->hbaLogItem)) {
                $res['HbaLogItem'] = [];
                $n1 = 0;
                foreach ($this->hbaLogItem as $item1) {
                    $res['HbaLogItem'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['HbaLogItem'])) {
            if (!empty($map['HbaLogItem'])) {
                $model->hbaLogItem = [];
                $n1 = 0;
                foreach ($map['HbaLogItem'] as $item1) {
                    $model->hbaLogItem[$n1++] = hbaLogItem::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
