<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeEcsScenarioFacadeResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeEcsScenarioFacadeResponseBody\scenarios\contents;
use AlibabaCloud\Tea\Model;

class scenarios extends Model
{
    /**
     * @var contents[]
     */
    public $contents;

    /**
     * @var string
     */
    public $scenario;
    protected $_name = [
        'contents' => 'Contents',
        'scenario' => 'Scenario',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contents) {
            $res['Contents'] = [];
            if (null !== $this->contents && \is_array($this->contents)) {
                $n = 0;
                foreach ($this->contents as $item) {
                    $res['Contents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->scenario) {
            $res['Scenario'] = $this->scenario;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scenarios
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Contents'])) {
            if (!empty($map['Contents'])) {
                $model->contents = [];
                $n               = 0;
                foreach ($map['Contents'] as $item) {
                    $model->contents[$n++] = null !== $item ? contents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Scenario'])) {
            $model->scenario = $map['Scenario'];
        }

        return $model;
    }
}
