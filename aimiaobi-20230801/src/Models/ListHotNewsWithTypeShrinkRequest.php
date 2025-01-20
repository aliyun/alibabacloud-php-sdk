<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class ListHotNewsWithTypeShrinkRequest extends Model
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
     * @var string
     */
    public $newsTypesShrink;
    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'agentKey'        => 'AgentKey',
        'current'         => 'Current',
        'newsType'        => 'NewsType',
        'newsTypesShrink' => 'NewsTypes',
        'size'            => 'Size',
    ];

    public function validate()
    {
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

        if (null !== $this->newsTypesShrink) {
            $res['NewsTypes'] = $this->newsTypesShrink;
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
            $model->newsTypesShrink = $map['NewsTypes'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
