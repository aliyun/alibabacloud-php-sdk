<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopConsultResponseBody\module\passengerJourneyGroupInfoList;

use AlibabaCloud\Dara\Model;

class reShopReasonInfoList extends Model
{
    /**
     * @var string
     */
    public $reasonCode;

    /**
     * @var string
     */
    public $reasonDesc;

    /**
     * @var bool
     */
    public $voluntary;
    protected $_name = [
        'reasonCode' => 'reason_code',
        'reasonDesc' => 'reason_desc',
        'voluntary' => 'voluntary',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reasonCode) {
            $res['reason_code'] = $this->reasonCode;
        }

        if (null !== $this->reasonDesc) {
            $res['reason_desc'] = $this->reasonDesc;
        }

        if (null !== $this->voluntary) {
            $res['voluntary'] = $this->voluntary;
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
        if (isset($map['reason_code'])) {
            $model->reasonCode = $map['reason_code'];
        }

        if (isset($map['reason_desc'])) {
            $model->reasonDesc = $map['reason_desc'];
        }

        if (isset($map['voluntary'])) {
            $model->voluntary = $map['voluntary'];
        }

        return $model;
    }
}
