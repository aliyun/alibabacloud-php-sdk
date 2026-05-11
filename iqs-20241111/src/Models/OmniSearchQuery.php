<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Dara\Model;

class OmniSearchQuery extends Model
{
    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var bool
     */
    public $useCot;

    /**
     * @var string
     */
    public $useModel;
    protected $_name = [
        'query' => 'query',
        'sessionId' => 'sessionId',
        'useCot' => 'useCot',
        'useModel' => 'useModel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->useCot) {
            $res['useCot'] = $this->useCot;
        }

        if (null !== $this->useModel) {
            $res['useModel'] = $this->useModel;
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
        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['useCot'])) {
            $model->useCot = $map['useCot'];
        }

        if (isset($map['useModel'])) {
            $model->useModel = $map['useModel'];
        }

        return $model;
    }
}
