<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogReportListResponseBody\items\item;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogReportListResponseBody\items\item\QPSTopNItems\QPSTopNItem;

class QPSTopNItems extends Model
{
    /**
     * @var QPSTopNItem[]
     */
    public $QPSTopNItem;
    protected $_name = [
        'QPSTopNItem' => 'QPSTopNItem',
    ];

    public function validate()
    {
        if (\is_array($this->QPSTopNItem)) {
            Model::validateArray($this->QPSTopNItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->QPSTopNItem) {
            if (\is_array($this->QPSTopNItem)) {
                $res['QPSTopNItem'] = [];
                $n1                 = 0;
                foreach ($this->QPSTopNItem as $item1) {
                    $res['QPSTopNItem'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['QPSTopNItem'])) {
            if (!empty($map['QPSTopNItem'])) {
                $model->QPSTopNItem = [];
                $n1                 = 0;
                foreach ($map['QPSTopNItem'] as $item1) {
                    $model->QPSTopNItem[$n1++] = QPSTopNItem::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
