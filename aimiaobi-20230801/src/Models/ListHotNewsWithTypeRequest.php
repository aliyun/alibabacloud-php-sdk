<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class ListHotNewsWithTypeRequest extends Model
{
    /**
     * @example c160c841c8e54295bf2f441432785944_p_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example 1
     *
     * @var int
     */
    public $current;

    /**
     * @example society
     *
     * @var string
     */
    public $newsType;

    /**
     * @var string[]
     */
    public $newsTypes;

    /**
     * @example 10
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'agentKey'  => 'AgentKey',
        'current'   => 'Current',
        'newsType'  => 'NewsType',
        'newsTypes' => 'NewsTypes',
        'size'      => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['NewsTypes'] = $this->newsTypes;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHotNewsWithTypeRequest
     */
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
                $model->newsTypes = $map['NewsTypes'];
            }
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
