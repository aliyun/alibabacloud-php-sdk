<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20221111\Models\QueryBuildBreakpointResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\QueryBuildBreakpointResponseBody\data\breakpoints;

class data extends Model
{
    /**
     * @var breakpoints[]
     */
    public $breakpoints;

    /**
     * @var string
     */
    public $projectId;
    protected $_name = [
        'breakpoints' => 'Breakpoints',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
        if (\is_array($this->breakpoints)) {
            Model::validateArray($this->breakpoints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->breakpoints) {
            if (\is_array($this->breakpoints)) {
                $res['Breakpoints'] = [];
                $n1 = 0;
                foreach ($this->breakpoints as $item1) {
                    $res['Breakpoints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
        if (isset($map['Breakpoints'])) {
            if (!empty($map['Breakpoints'])) {
                $model->breakpoints = [];
                $n1 = 0;
                foreach ($map['Breakpoints'] as $item1) {
                    $model->breakpoints[$n1] = breakpoints::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
