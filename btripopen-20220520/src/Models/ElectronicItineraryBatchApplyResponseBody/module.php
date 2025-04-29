<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ElectronicItineraryBatchApplyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ElectronicItineraryBatchApplyResponseBody\module\applyFailedTicketList;

class module extends Model
{
    /**
     * @var applyFailedTicketList[]
     */
    public $applyFailedTicketList;

    /**
     * @var string
     */
    public $batchNo;
    protected $_name = [
        'applyFailedTicketList' => 'apply_failed_ticket_list',
        'batchNo' => 'batch_no',
    ];

    public function validate()
    {
        if (\is_array($this->applyFailedTicketList)) {
            Model::validateArray($this->applyFailedTicketList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyFailedTicketList) {
            if (\is_array($this->applyFailedTicketList)) {
                $res['apply_failed_ticket_list'] = [];
                $n1 = 0;
                foreach ($this->applyFailedTicketList as $item1) {
                    $res['apply_failed_ticket_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->batchNo) {
            $res['batch_no'] = $this->batchNo;
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
        if (isset($map['apply_failed_ticket_list'])) {
            if (!empty($map['apply_failed_ticket_list'])) {
                $model->applyFailedTicketList = [];
                $n1 = 0;
                foreach ($map['apply_failed_ticket_list'] as $item1) {
                    $model->applyFailedTicketList[$n1++] = applyFailedTicketList::fromMap($item1);
                }
            }
        }

        if (isset($map['batch_no'])) {
            $model->batchNo = $map['batch_no'];
        }

        return $model;
    }
}
