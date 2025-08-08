<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowConstantsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowConstantsResponseBody\dagConstants\dagConstant;

class dagConstants extends Model
{
    /**
     * @var dagConstant[]
     */
    public $dagConstant;
    protected $_name = [
        'dagConstant' => 'DagConstant',
    ];

    public function validate()
    {
        if (\is_array($this->dagConstant)) {
            Model::validateArray($this->dagConstant);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dagConstant) {
            if (\is_array($this->dagConstant)) {
                $res['DagConstant'] = [];
                $n1 = 0;
                foreach ($this->dagConstant as $item1) {
                    $res['DagConstant'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DagConstant'])) {
            if (!empty($map['DagConstant'])) {
                $model->dagConstant = [];
                $n1 = 0;
                foreach ($map['DagConstant'] as $item1) {
                    $model->dagConstant[$n1] = dagConstant::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
