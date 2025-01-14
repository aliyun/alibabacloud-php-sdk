<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output\videoMindMappingGenerateResult;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output\videoMindMappingGenerateResult\videoMindMappings\childNodes;
use AlibabaCloud\Tea\Model;

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
        'name'       => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->childNodes) {
            $res['childNodes'] = [];
            if (null !== $this->childNodes && \is_array($this->childNodes)) {
                $n = 0;
                foreach ($this->childNodes as $item) {
                    $res['childNodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoMindMappings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['childNodes'])) {
            if (!empty($map['childNodes'])) {
                $model->childNodes = [];
                $n                 = 0;
                foreach ($map['childNodes'] as $item) {
                    $model->childNodes[$n++] = null !== $item ? childNodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
