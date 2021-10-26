<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeVarDiffBetweenGroupResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeVarDiffBetweenGroupResponseBody\variableDiffs\variableDiff;
use AlibabaCloud\Tea\Model;

class variableDiffs extends Model
{
    /**
     * @var variableDiff[]
     */
    public $variableDiff;
    protected $_name = [
        'variableDiff' => 'VariableDiff',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->variableDiff) {
            $res['VariableDiff'] = [];
            if (null !== $this->variableDiff && \is_array($this->variableDiff)) {
                $n = 0;
                foreach ($this->variableDiff as $item) {
                    $res['VariableDiff'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return variableDiffs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VariableDiff'])) {
            if (!empty($map['VariableDiff'])) {
                $model->variableDiff = [];
                $n                   = 0;
                foreach ($map['VariableDiff'] as $item) {
                    $model->variableDiff[$n++] = null !== $item ? variableDiff::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
