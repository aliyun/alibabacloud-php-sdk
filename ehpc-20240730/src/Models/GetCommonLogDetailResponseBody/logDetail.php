<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\GetCommonLogDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20240730\Models\GetCommonLogDetailResponseBody\logDetail\stages;

class logDetail extends Model
{
    /**
     * @var string
     */
    public $stageName;

    /**
     * @var stages[]
     */
    public $stages;
    protected $_name = [
        'stageName' => 'StageName',
        'stages' => 'Stages',
    ];

    public function validate()
    {
        if (\is_array($this->stages)) {
            Model::validateArray($this->stages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }

        if (null !== $this->stages) {
            if (\is_array($this->stages)) {
                $res['Stages'] = [];
                $n1 = 0;
                foreach ($this->stages as $item1) {
                    $res['Stages'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }

        if (isset($map['Stages'])) {
            if (!empty($map['Stages'])) {
                $model->stages = [];
                $n1 = 0;
                foreach ($map['Stages'] as $item1) {
                    $model->stages[$n1++] = stages::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
