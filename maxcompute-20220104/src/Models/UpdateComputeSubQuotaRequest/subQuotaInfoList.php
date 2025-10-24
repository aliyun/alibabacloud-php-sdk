<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateComputeSubQuotaRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateComputeSubQuotaRequest\subQuotaInfoList\parameter;

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

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'nickName' => 'nickName',
        'parameter' => 'parameter',
        'type' => 'type',
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

        if (null !== $this->type) {
            $res['type'] = $this->type;
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

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
