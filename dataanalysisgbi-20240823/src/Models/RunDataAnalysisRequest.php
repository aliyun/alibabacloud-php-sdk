<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models;

use AlibabaCloud\Dara\Model;

class RunDataAnalysisRequest extends Model
{
    /**
     * @var mixed
     */
    public $agentCtrlParams;

    /**
     * @var string[]
     */
    public $dataRole;

    /**
     * @var bool
     */
    public $generateSqlOnly;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $specificationType;

    /**
     * @var mixed
     */
    public $userParams;
    protected $_name = [
        'agentCtrlParams' => 'agentCtrlParams',
        'dataRole' => 'dataRole',
        'generateSqlOnly' => 'generateSqlOnly',
        'query' => 'query',
        'sessionId' => 'sessionId',
        'specificationType' => 'specificationType',
        'userParams' => 'userParams',
    ];

    public function validate()
    {
        if (\is_array($this->dataRole)) {
            Model::validateArray($this->dataRole);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentCtrlParams) {
            $res['agentCtrlParams'] = $this->agentCtrlParams;
        }

        if (null !== $this->dataRole) {
            if (\is_array($this->dataRole)) {
                $res['dataRole'] = [];
                $n1 = 0;
                foreach ($this->dataRole as $item1) {
                    $res['dataRole'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->generateSqlOnly) {
            $res['generateSqlOnly'] = $this->generateSqlOnly;
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->specificationType) {
            $res['specificationType'] = $this->specificationType;
        }

        if (null !== $this->userParams) {
            $res['userParams'] = $this->userParams;
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
        if (isset($map['agentCtrlParams'])) {
            $model->agentCtrlParams = $map['agentCtrlParams'];
        }

        if (isset($map['dataRole'])) {
            if (!empty($map['dataRole'])) {
                $model->dataRole = [];
                $n1 = 0;
                foreach ($map['dataRole'] as $item1) {
                    $model->dataRole[$n1++] = $item1;
                }
            }
        }

        if (isset($map['generateSqlOnly'])) {
            $model->generateSqlOnly = $map['generateSqlOnly'];
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['specificationType'])) {
            $model->specificationType = $map['specificationType'];
        }

        if (isset($map['userParams'])) {
            $model->userParams = $map['userParams'];
        }

        return $model;
    }
}
