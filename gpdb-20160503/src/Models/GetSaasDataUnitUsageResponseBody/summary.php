<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\GetSaasDataUnitUsageResponseBody;

use AlibabaCloud\Dara\Model;

class summary extends Model
{
    /**
     * @var string
     */
    public $dataUnit;
    protected $_name = [
        'dataUnit' => 'DataUnit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataUnit) {
            $res['DataUnit'] = $this->dataUnit;
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
        if (isset($map['DataUnit'])) {
            $model->dataUnit = $map['DataUnit'];
        }

        return $model;
    }
}
