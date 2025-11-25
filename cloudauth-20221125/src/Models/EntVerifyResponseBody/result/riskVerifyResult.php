<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20221125\Models\EntVerifyResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudauth\V20221125\Models\EntVerifyResponseBody\result\riskVerifyResult\modelResults;

class riskVerifyResult extends Model
{
    /**
     * @var bool
     */
    public $found;

    /**
     * @var modelResults[]
     */
    public $modelResults;
    protected $_name = [
        'found' => 'Found',
        'modelResults' => 'ModelResults',
    ];

    public function validate()
    {
        if (\is_array($this->modelResults)) {
            Model::validateArray($this->modelResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->found) {
            $res['Found'] = $this->found;
        }

        if (null !== $this->modelResults) {
            if (\is_array($this->modelResults)) {
                $res['ModelResults'] = [];
                $n1 = 0;
                foreach ($this->modelResults as $item1) {
                    $res['ModelResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Found'])) {
            $model->found = $map['Found'];
        }

        if (isset($map['ModelResults'])) {
            if (!empty($map['ModelResults'])) {
                $model->modelResults = [];
                $n1 = 0;
                foreach ($map['ModelResults'] as $item1) {
                    $model->modelResults[$n1] = modelResults::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
