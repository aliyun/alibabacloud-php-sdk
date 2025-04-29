<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module;

use AlibabaCloud\Dara\Model;

class approve extends Model
{
    /**
     * @var int
     */
    public $approveId;

    /**
     * @var string
     */
    public $btripTitle;

    /**
     * @var string
     */
    public $exceedApproveId;

    /**
     * @var string
     */
    public $thirdpartApproveId;

    /**
     * @var string
     */
    public $thirdpartExceedApproveId;
    protected $_name = [
        'approveId' => 'approve_id',
        'btripTitle' => 'btrip_title',
        'exceedApproveId' => 'exceed_approve_id',
        'thirdpartApproveId' => 'thirdpart_approve_id',
        'thirdpartExceedApproveId' => 'thirdpart_exceed_approve_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approveId) {
            $res['approve_id'] = $this->approveId;
        }

        if (null !== $this->btripTitle) {
            $res['btrip_title'] = $this->btripTitle;
        }

        if (null !== $this->exceedApproveId) {
            $res['exceed_approve_id'] = $this->exceedApproveId;
        }

        if (null !== $this->thirdpartApproveId) {
            $res['thirdpart_approve_id'] = $this->thirdpartApproveId;
        }

        if (null !== $this->thirdpartExceedApproveId) {
            $res['thirdpart_exceed_approve_id'] = $this->thirdpartExceedApproveId;
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
        if (isset($map['approve_id'])) {
            $model->approveId = $map['approve_id'];
        }

        if (isset($map['btrip_title'])) {
            $model->btripTitle = $map['btrip_title'];
        }

        if (isset($map['exceed_approve_id'])) {
            $model->exceedApproveId = $map['exceed_approve_id'];
        }

        if (isset($map['thirdpart_approve_id'])) {
            $model->thirdpartApproveId = $map['thirdpart_approve_id'];
        }

        if (isset($map['thirdpart_exceed_approve_id'])) {
            $model->thirdpartExceedApproveId = $map['thirdpart_exceed_approve_id'];
        }

        return $model;
    }
}
