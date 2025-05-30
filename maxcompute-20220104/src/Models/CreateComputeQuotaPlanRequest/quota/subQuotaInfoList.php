<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\CreateComputeQuotaPlanRequest\quota;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\CreateComputeQuotaPlanRequest\quota\subQuotaInfoList\parameter;

class subQuotaInfoList extends Model
{
    /**
     * @var string
     */
    public $nickName;

    /**
     * @var parameter
     */
    public $parameter;
    protected $_name = [
        'nickName' => 'nickName',
        'parameter' => 'parameter',
    ];

    public function validate()
    {
        if (null !== $this->parameter) {
            $this->parameter->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nickName) {
            $res['nickName'] = $this->nickName;
        }

        if (null !== $this->parameter) {
            $res['parameter'] = null !== $this->parameter ? $this->parameter->toArray($noStream) : $this->parameter;
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
        if (isset($map['nickName'])) {
            $model->nickName = $map['nickName'];
        }

        if (isset($map['parameter'])) {
            $model->parameter = parameter::fromMap($map['parameter']);
        }

        return $model;
    }
}
