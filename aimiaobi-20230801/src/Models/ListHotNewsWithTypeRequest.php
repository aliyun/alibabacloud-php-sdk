<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class ListHotNewsWithTypeRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var int
     */
    public $current;

    /**
     * @var string
     */
    public $newsType;

    /**
     * @var string[]
     */
    public $newsTypes;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'current' => 'Current',
        'newsType' => 'NewsType',
        'newsTypes' => 'NewsTypes',
        'size' => 'Size',
    ];

    public function validate()
    {
        if (\is_array($this->newsTypes)) {
            Model::validateArray($this->newsTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->current) {
            $res['Current'] = $this->current;
        }

        if (null !== $this->newsType) {
            $res['NewsType'] = $this->newsType;
        }

        if (null !== $this->newsTypes) {
            if (\is_array($this->newsTypes)) {
                $res['NewsTypes'] = [];
                $n1 = 0;
                foreach ($this->newsTypes as $item1) {
                    $res['NewsTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
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
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }

        if (isset($map['Current'])) {
            $model->current = $map['Current'];
        }

        if (isset($map['NewsType'])) {
            $model->newsType = $map['NewsType'];
        }

        if (isset($map['NewsTypes'])) {
            if (!empty($map['NewsTypes'])) {
                $model->newsTypes = [];
                $n1 = 0;
                foreach ($map['NewsTypes'] as $item1) {
                    $model->newsTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
