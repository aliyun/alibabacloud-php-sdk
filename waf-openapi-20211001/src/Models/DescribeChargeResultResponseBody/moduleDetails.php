<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeChargeResultResponseBody;

use AlibabaCloud\Dara\Model;

class moduleDetails extends Model
{
    /**
     * @var string
     */
    public $moduleCode;

    /**
     * @var float
     */
    public $seCu;
    protected $_name = [
        'moduleCode' => 'ModuleCode',
        'seCu' => 'SeCu',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
        }

        if (null !== $this->seCu) {
            $res['SeCu'] = $this->seCu;
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
        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }

        if (isset($map['SeCu'])) {
            $model->seCu = $map['SeCu'];
        }

        return $model;
    }
}
