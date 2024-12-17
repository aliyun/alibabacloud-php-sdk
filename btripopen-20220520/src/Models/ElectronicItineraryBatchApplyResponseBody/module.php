<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ElectronicItineraryBatchApplyResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ElectronicItineraryBatchApplyResponseBody\module\applyFailedTicketList;
use AlibabaCloud\Tea\Model;

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
        'batchNo'               => 'batch_no',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyFailedTicketList) {
            $res['apply_failed_ticket_list'] = [];
            if (null !== $this->applyFailedTicketList && \is_array($this->applyFailedTicketList)) {
                $n = 0;
                foreach ($this->applyFailedTicketList as $item) {
                    $res['apply_failed_ticket_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->batchNo) {
            $res['batch_no'] = $this->batchNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apply_failed_ticket_list'])) {
            if (!empty($map['apply_failed_ticket_list'])) {
                $model->applyFailedTicketList = [];
                $n                            = 0;
                foreach ($map['apply_failed_ticket_list'] as $item) {
                    $model->applyFailedTicketList[$n++] = null !== $item ? applyFailedTicketList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['batch_no'])) {
            $model->batchNo = $map['batch_no'];
        }

        return $model;
    }
}
