<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateAgentSpecRequest;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var string
     */
    public $bizTags;

    /**
     * @var string
     */
    public $labels;

    /**
     * @var string
     */
    public $scope;
    protected $_name = [
        'bizTags' => 'bizTags',
        'labels' => 'labels',
        'scope' => 'scope',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizTags) {
            $res['bizTags'] = $this->bizTags;
        }

        if (null !== $this->labels) {
            $res['labels'] = $this->labels;
        }

        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
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
        if (isset($map['bizTags'])) {
            $model->bizTags = $map['bizTags'];
        }

        if (isset($map['labels'])) {
            $model->labels = $map['labels'];
        }

        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }

        return $model;
    }
}
