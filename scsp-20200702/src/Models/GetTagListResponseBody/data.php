<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scsp\V20200702\Models\GetTagListResponseBody;

use AlibabaCloud\SDK\Scsp\V20200702\Models\GetTagListResponseBody\data\tagValues;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $scenarioCode;

    /**
     * @var string
     */
    public $tagGroupCode;

    /**
     * @var tagValues[]
     */
    public $tagValues;

    /**
     * @var string
     */
    public $tagGroupName;
    protected $_name = [
        'scenarioCode' => 'ScenarioCode',
        'tagGroupCode' => 'TagGroupCode',
        'tagValues'    => 'TagValues',
        'tagGroupName' => 'TagGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scenarioCode) {
            $res['ScenarioCode'] = $this->scenarioCode;
        }
        if (null !== $this->tagGroupCode) {
            $res['TagGroupCode'] = $this->tagGroupCode;
        }
        if (null !== $this->tagValues) {
            $res['TagValues'] = [];
            if (null !== $this->tagValues && \is_array($this->tagValues)) {
                $n = 0;
                foreach ($this->tagValues as $item) {
                    $res['TagValues'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tagGroupName) {
            $res['TagGroupName'] = $this->tagGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScenarioCode'])) {
            $model->scenarioCode = $map['ScenarioCode'];
        }
        if (isset($map['TagGroupCode'])) {
            $model->tagGroupCode = $map['TagGroupCode'];
        }
        if (isset($map['TagValues'])) {
            if (!empty($map['TagValues'])) {
                $model->tagValues = [];
                $n                = 0;
                foreach ($map['TagValues'] as $item) {
                    $model->tagValues[$n++] = null !== $item ? tagValues::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TagGroupName'])) {
            $model->tagGroupName = $map['TagGroupName'];
        }

        return $model;
    }
}
