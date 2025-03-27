<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output\videoMindMappingGenerateResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output\videoMindMappingGenerateResult\videoMindMappings\childNodes;

class videoMindMappings extends Model
{
    /**
     * @var childNodes[]
     */
    public $childNodes;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'childNodes' => 'childNodes',
        'name' => 'name',
    ];

    public function validate()
    {
        if (\is_array($this->childNodes)) {
            Model::validateArray($this->childNodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->childNodes) {
            if (\is_array($this->childNodes)) {
                $res['childNodes'] = [];
                $n1 = 0;
                foreach ($this->childNodes as $item1) {
                    $res['childNodes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['childNodes'])) {
            if (!empty($map['childNodes'])) {
                $model->childNodes = [];
                $n1 = 0;
                foreach ($map['childNodes'] as $item1) {
                    $model->childNodes[$n1++] = childNodes::fromMap($item1);
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
