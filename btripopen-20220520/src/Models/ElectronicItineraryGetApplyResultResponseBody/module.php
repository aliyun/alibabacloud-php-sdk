<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ElectronicItineraryGetApplyResultResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ElectronicItineraryGetApplyResultResponseBody\module\applyTicketList;
use AlibabaCloud\Tea\Model;

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
        'batchApplyNo'    => 'batch_apply_no',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyTicketList) {
            $res['apply_ticket_list'] = [];
            if (null !== $this->applyTicketList && \is_array($this->applyTicketList)) {
                $n = 0;
                foreach ($this->applyTicketList as $item) {
                    $res['apply_ticket_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->batchApplyNo) {
            $res['batch_apply_no'] = $this->batchApplyNo;
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
        if (isset($map['apply_ticket_list'])) {
            if (!empty($map['apply_ticket_list'])) {
                $model->applyTicketList = [];
                $n                      = 0;
                foreach ($map['apply_ticket_list'] as $item) {
                    $model->applyTicketList[$n++] = null !== $item ? applyTicketList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['batch_apply_no'])) {
            $model->batchApplyNo = $map['batch_apply_no'];
        }

        return $model;
    }
}
