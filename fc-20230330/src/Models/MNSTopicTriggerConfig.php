<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class MNSTopicTriggerConfig extends Model
{
    /**
     * @var string
     */
    public $filterTag;
    /**
     * @var string
     */
    public $notifyContentFormat;
    /**
     * @var string
     */
    public $notifyStrategy;
    protected $_name = [
        'filterTag'           => 'filterTag',
        'notifyContentFormat' => 'notifyContentFormat',
        'notifyStrategy'      => 'notifyStrategy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filterTag) {
            $res['filterTag'] = $this->filterTag;
        }

        if (null !== $this->notifyContentFormat) {
            $res['notifyContentFormat'] = $this->notifyContentFormat;
        }

        if (null !== $this->notifyStrategy) {
            $res['notifyStrategy'] = $this->notifyStrategy;
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
        if (isset($map['filterTag'])) {
            $model->filterTag = $map['filterTag'];
        }

        if (isset($map['notifyContentFormat'])) {
            $model->notifyContentFormat = $map['notifyContentFormat'];
        }

        if (isset($map['notifyStrategy'])) {
            $model->notifyStrategy = $map['notifyStrategy'];
        }

        return $model;
    }
}
