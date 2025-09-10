<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListUserDefinedEventSourcesResponseBody\data\eventSourceList;

use AlibabaCloud\Dara\Model;

class sourceOSSEventParameters extends Model
{
    /**
     * @var string[]
     */
    public $eventTypes;

    /**
     * @var mixed
     */
    public $matchRules;

    /**
     * @var string
     */
    public $stsRoleArn;
    protected $_name = [
        'eventTypes' => 'EventTypes',
        'matchRules' => 'MatchRules',
        'stsRoleArn' => 'StsRoleArn',
    ];

    public function validate()
    {
        if (\is_array($this->eventTypes)) {
            Model::validateArray($this->eventTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventTypes) {
            if (\is_array($this->eventTypes)) {
                $res['EventTypes'] = [];
                $n1 = 0;
                foreach ($this->eventTypes as $item1) {
                    $res['EventTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->matchRules) {
            $res['MatchRules'] = $this->matchRules;
        }

        if (null !== $this->stsRoleArn) {
            $res['StsRoleArn'] = $this->stsRoleArn;
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
        if (isset($map['EventTypes'])) {
            if (!empty($map['EventTypes'])) {
                $model->eventTypes = [];
                $n1 = 0;
                foreach ($map['EventTypes'] as $item1) {
                    $model->eventTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MatchRules'])) {
            $model->matchRules = $map['MatchRules'];
        }

        if (isset($map['StsRoleArn'])) {
            $model->stsRoleArn = $map['StsRoleArn'];
        }

        return $model;
    }
}
