<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventSourceRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventSourceRequest\sourceOSSEventParameters\matchRules;

class sourceOSSEventParameters extends Model
{
    /**
     * @var string[]
     */
    public $eventTypes;

    /**
     * @var matchRules[][]
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
        if (\is_array($this->matchRules)) {
            Model::validateArray($this->matchRules);
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
            if (\is_array($this->matchRules)) {
                $res['MatchRules'] = [];
                $n1 = 0;
                foreach ($this->matchRules as $item1) {
                    if (\is_array($item1)) {
                        $res['MatchRules'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['MatchRules'][$n1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
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
            if (!empty($map['MatchRules'])) {
                $model->matchRules = [];
                $n1 = 0;
                foreach ($map['MatchRules'] as $item1) {
                    if (!empty($item1)) {
                        $model->matchRules[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->matchRules[$n1][$n2] = matchRules::fromMap($item2);
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['StsRoleArn'])) {
            $model->stsRoleArn = $map['StsRoleArn'];
        }

        return $model;
    }
}
