<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class GetImageScanNumInPeriodRequest extends Model
{
    /**
     * @var string
     */
    public $pastDay;
    protected $_name = [
        'pastDay' => 'PastDay',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pastDay) {
            $res['PastDay'] = $this->pastDay;
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
        if (isset($map['PastDay'])) {
            $model->pastDay = $map['PastDay'];
        }

        return $model;
    }
}
