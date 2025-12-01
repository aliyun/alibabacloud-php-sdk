<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetSuspEventSummaryResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetSuspEventSummaryResponseBody\data\suspEventTopDTO\suspEventList;

class suspEventTopDTO extends Model
{
    /**
     * @var suspEventList[]
     */
    public $suspEventList;
    protected $_name = [
        'suspEventList' => 'SuspEventList',
    ];

    public function validate()
    {
        if (\is_array($this->suspEventList)) {
            Model::validateArray($this->suspEventList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->suspEventList) {
            if (\is_array($this->suspEventList)) {
                $res['SuspEventList'] = [];
                $n1 = 0;
                foreach ($this->suspEventList as $item1) {
                    $res['SuspEventList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SuspEventList'])) {
            if (!empty($map['SuspEventList'])) {
                $model->suspEventList = [];
                $n1 = 0;
                foreach ($map['SuspEventList'] as $item1) {
                    $model->suspEventList[$n1] = suspEventList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
