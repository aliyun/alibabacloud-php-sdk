<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models\DescribeTaskBriefInfoResponseBody;

use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeTaskBriefInfoResponseBody\brief\actionRunsFacet;
use AlibabaCloud\Tea\Model;

class brief extends Model
{
    /**
     * @var int
     */
    public $finishedAt;

    /**
     * @var float
     */
    public $progress;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var actionRunsFacet
     */
    public $actionRunsFacet;
    protected $_name = [
        'finishedAt'      => 'FinishedAt',
        'progress'        => 'Progress',
        'description'     => 'Description',
        'createdAt'       => 'CreatedAt',
        'actionRunsFacet' => 'ActionRunsFacet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->finishedAt) {
            $res['FinishedAt'] = $this->finishedAt;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->actionRunsFacet) {
            $res['ActionRunsFacet'] = null !== $this->actionRunsFacet ? $this->actionRunsFacet->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return brief
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FinishedAt'])) {
            $model->finishedAt = $map['FinishedAt'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['ActionRunsFacet'])) {
            $model->actionRunsFacet = actionRunsFacet::fromMap($map['ActionRunsFacet']);
        }

        return $model;
    }
}
