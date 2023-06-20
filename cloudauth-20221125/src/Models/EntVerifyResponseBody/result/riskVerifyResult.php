<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20221125\Models\EntVerifyResponseBody\result;

use AlibabaCloud\SDK\Cloudauth\V20221125\Models\EntVerifyResponseBody\result\riskVerifyResult\modelResults;
use AlibabaCloud\Tea\Model;

class riskVerifyResult extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $found;

    /**
     * @var modelResults[]
     */
    public $modelResults;
    protected $_name = [
        'found'        => 'Found',
        'modelResults' => 'ModelResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->found) {
            $res['Found'] = $this->found;
        }
        if (null !== $this->modelResults) {
            $res['ModelResults'] = [];
            if (null !== $this->modelResults && \is_array($this->modelResults)) {
                $n = 0;
                foreach ($this->modelResults as $item) {
                    $res['ModelResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return riskVerifyResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Found'])) {
            $model->found = $map['Found'];
        }
        if (isset($map['ModelResults'])) {
            if (!empty($map['ModelResults'])) {
                $model->modelResults = [];
                $n                   = 0;
                foreach ($map['ModelResults'] as $item) {
                    $model->modelResults[$n++] = null !== $item ? modelResults::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
