<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsRequest;

use AlibabaCloud\Dara\Model;

class purchaseOptions extends Model
{
    /**
     * @var int
     */
    public $monthlyCredits;
    protected $_name = [
        'monthlyCredits' => 'MonthlyCredits',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->monthlyCredits) {
            $res['MonthlyCredits'] = $this->monthlyCredits;
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
        if (isset($map['MonthlyCredits'])) {
            $model->monthlyCredits = $map['MonthlyCredits'];
        }

        return $model;
    }
}
