<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryWaterMarkTemplateListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryWaterMarkTemplateListResponseBody\waterMarkTemplateList\waterMarkTemplate;

class waterMarkTemplateList extends Model
{
    /**
     * @var waterMarkTemplate[]
     */
    public $waterMarkTemplate;
    protected $_name = [
        'waterMarkTemplate' => 'WaterMarkTemplate',
    ];

    public function validate()
    {
        if (\is_array($this->waterMarkTemplate)) {
            Model::validateArray($this->waterMarkTemplate);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->waterMarkTemplate) {
            if (\is_array($this->waterMarkTemplate)) {
                $res['WaterMarkTemplate'] = [];
                $n1 = 0;
                foreach ($this->waterMarkTemplate as $item1) {
                    $res['WaterMarkTemplate'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['WaterMarkTemplate'])) {
            if (!empty($map['WaterMarkTemplate'])) {
                $model->waterMarkTemplate = [];
                $n1 = 0;
                foreach ($map['WaterMarkTemplate'] as $item1) {
                    $model->waterMarkTemplate[$n1] = waterMarkTemplate::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
