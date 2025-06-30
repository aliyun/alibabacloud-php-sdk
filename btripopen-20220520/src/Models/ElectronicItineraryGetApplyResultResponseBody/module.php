<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ElectronicItineraryGetApplyResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ElectronicItineraryGetApplyResultResponseBody\module\applyTicketList;

class module extends Model
{
    /**
     * @var applyTicketList[]
     */
    public $applyTicketList;

    /**
     * @var string
     */
    public $batchApplyNo;
    protected $_name = [
        'applyTicketList' => 'apply_ticket_list',
        'batchApplyNo' => 'batch_apply_no',
    ];

    public function validate()
    {
        if (\is_array($this->applyTicketList)) {
            Model::validateArray($this->applyTicketList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyTicketList) {
            if (\is_array($this->applyTicketList)) {
                $res['apply_ticket_list'] = [];
                $n1 = 0;
                foreach ($this->applyTicketList as $item1) {
                    $res['apply_ticket_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->batchApplyNo) {
            $res['batch_apply_no'] = $this->batchApplyNo;
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
        if (isset($map['apply_ticket_list'])) {
            if (!empty($map['apply_ticket_list'])) {
                $model->applyTicketList = [];
                $n1 = 0;
                foreach ($map['apply_ticket_list'] as $item1) {
                    $model->applyTicketList[$n1] = applyTicketList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['batch_apply_no'])) {
            $model->batchApplyNo = $map['batch_apply_no'];
        }

        return $model;
    }
}
