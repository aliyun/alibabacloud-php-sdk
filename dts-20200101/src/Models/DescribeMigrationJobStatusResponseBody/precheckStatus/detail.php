<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobStatusResponseBody\precheckStatus;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobStatusResponseBody\precheckStatus\detail\checkItem;

class detail extends Model
{
    /**
     * @var checkItem[]
     */
    public $checkItem;
    protected $_name = [
        'checkItem' => 'CheckItem',
    ];

    public function validate()
    {
        if (\is_array($this->checkItem)) {
            Model::validateArray($this->checkItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkItem) {
            if (\is_array($this->checkItem)) {
                $res['CheckItem'] = [];
                $n1               = 0;
                foreach ($this->checkItem as $item1) {
                    $res['CheckItem'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CheckItem'])) {
            if (!empty($map['CheckItem'])) {
                $model->checkItem = [];
                $n1               = 0;
                foreach ($map['CheckItem'] as $item1) {
                    $model->checkItem[$n1++] = checkItem::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
