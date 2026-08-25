<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models;

use AlibabaCloud\Dara\Model;

class ListModelsRequest extends Model
{
    /**
     * @var string
     */
    public $connectionId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'connectionId' => 'connectionId',
        'maxResults' => 'maxResults',
        'modelName' => 'modelName',
        'nextToken' => 'nextToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionId) {
            $res['connectionId'] = $this->connectionId;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->modelName) {
            $res['modelName'] = $this->modelName;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
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
        if (isset($map['connectionId'])) {
            $model->connectionId = $map['connectionId'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['modelName'])) {
            $model->modelName = $map['modelName'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        return $model;
    }
}
