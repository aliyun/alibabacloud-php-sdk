<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreTablesResponseBody\restoreFull;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreTablesResponseBody\restoreFull\restoreFullDetails\restoreFullDetail;

class restoreFullDetails extends Model
{
    /**
     * @var restoreFullDetail[]
     */
    public $restoreFullDetail;
    protected $_name = [
        'restoreFullDetail' => 'RestoreFullDetail',
    ];

    public function validate()
    {
        if (\is_array($this->restoreFullDetail)) {
            Model::validateArray($this->restoreFullDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->restoreFullDetail) {
            if (\is_array($this->restoreFullDetail)) {
                $res['RestoreFullDetail'] = [];
                $n1 = 0;
                foreach ($this->restoreFullDetail as $item1) {
                    $res['RestoreFullDetail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RestoreFullDetail'])) {
            if (!empty($map['RestoreFullDetail'])) {
                $model->restoreFullDetail = [];
                $n1 = 0;
                foreach ($map['RestoreFullDetail'] as $item1) {
                    $model->restoreFullDetail[$n1] = restoreFullDetail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
