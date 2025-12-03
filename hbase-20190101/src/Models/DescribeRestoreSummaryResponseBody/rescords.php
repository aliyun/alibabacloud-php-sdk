<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreSummaryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreSummaryResponseBody\rescords\rescord;

class rescords extends Model
{
    /**
     * @var rescord[]
     */
    public $rescord;
    protected $_name = [
        'rescord' => 'Rescord',
    ];

    public function validate()
    {
        if (\is_array($this->rescord)) {
            Model::validateArray($this->rescord);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rescord) {
            if (\is_array($this->rescord)) {
                $res['Rescord'] = [];
                $n1 = 0;
                foreach ($this->rescord as $item1) {
                    $res['Rescord'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Rescord'])) {
            if (!empty($map['Rescord'])) {
                $model->rescord = [];
                $n1 = 0;
                foreach ($map['Rescord'] as $item1) {
                    $model->rescord[$n1] = rescord::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
