<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsNetLevelResponseBody\ensNetLevels;

use AlibabaCloud\Dara\Model;

class ensNetLevel extends Model
{
    /**
     * @var string
     */
    public $ensNetLevelCode;
    protected $_name = [
        'ensNetLevelCode' => 'EnsNetLevelCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ensNetLevelCode) {
            $res['EnsNetLevelCode'] = $this->ensNetLevelCode;
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
        if (isset($map['EnsNetLevelCode'])) {
            $model->ensNetLevelCode = $map['EnsNetLevelCode'];
        }

        return $model;
    }
}
