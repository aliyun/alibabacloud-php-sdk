<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateDatasetRequest\datasetConfig\searchSourceConfigs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateDatasetRequest\datasetConfig\searchSourceConfigs\searchSourceResponseConfig\jqNodes;

class searchSourceResponseConfig extends Model
{
    /**
     * @var jqNodes[]
     */
    public $jqNodes;
    protected $_name = [
        'jqNodes' => 'JqNodes',
    ];

    public function validate()
    {
        if (\is_array($this->jqNodes)) {
            Model::validateArray($this->jqNodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jqNodes) {
            if (\is_array($this->jqNodes)) {
                $res['JqNodes'] = [];
                $n1 = 0;
                foreach ($this->jqNodes as $item1) {
                    $res['JqNodes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['JqNodes'])) {
            if (!empty($map['JqNodes'])) {
                $model->jqNodes = [];
                $n1 = 0;
                foreach ($map['JqNodes'] as $item1) {
                    $model->jqNodes[$n1] = jqNodes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
