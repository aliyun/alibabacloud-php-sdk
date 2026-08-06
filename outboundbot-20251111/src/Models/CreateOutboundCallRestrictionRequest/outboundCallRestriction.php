<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateOutboundCallRestrictionRequest;

use AlibabaCloud\Dara\Model;

class outboundCallRestriction extends Model
{
    /**
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'number' => 'Number',
        'remark' => 'Remark',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
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
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
