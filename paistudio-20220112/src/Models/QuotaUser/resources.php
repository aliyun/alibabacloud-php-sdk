<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\QuotaUser;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ResourceAmount;

class resources extends Model
{
    /**
     * @var ResourceAmount
     */
    public $submitted;

    /**
     * @var ResourceAmount
     */
    public $used;
    protected $_name = [
        'submitted' => 'Submitted',
        'used' => 'Used',
    ];

    public function validate()
    {
        if (null !== $this->submitted) {
            $this->submitted->validate();
        }
        if (null !== $this->used) {
            $this->used->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->submitted) {
            $res['Submitted'] = null !== $this->submitted ? $this->submitted->toArray($noStream) : $this->submitted;
        }

        if (null !== $this->used) {
            $res['Used'] = null !== $this->used ? $this->used->toArray($noStream) : $this->used;
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
        if (isset($map['Submitted'])) {
            $model->submitted = ResourceAmount::fromMap($map['Submitted']);
        }

        if (isset($map['Used'])) {
            $model->used = ResourceAmount::fromMap($map['Used']);
        }

        return $model;
    }
}
