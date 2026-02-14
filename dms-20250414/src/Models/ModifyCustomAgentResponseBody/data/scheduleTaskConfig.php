<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\ModifyCustomAgentResponseBody\data;

use AlibabaCloud\Dara\Model;

class scheduleTaskConfig extends Model
{
    /**
     * @var string
     */
    public $cronExpression;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $relatedSessionId;
    protected $_name = [
        'cronExpression' => 'CronExpression',
        'query' => 'Query',
        'relatedSessionId' => 'RelatedSessionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cronExpression) {
            $res['CronExpression'] = $this->cronExpression;
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        if (null !== $this->relatedSessionId) {
            $res['RelatedSessionId'] = $this->relatedSessionId;
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
        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        if (isset($map['RelatedSessionId'])) {
            $model->relatedSessionId = $map['RelatedSessionId'];
        }

        return $model;
    }
}
