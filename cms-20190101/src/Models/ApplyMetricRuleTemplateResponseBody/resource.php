<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\ApplyMetricRuleTemplateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\ApplyMetricRuleTemplateResponseBody\resource\alertResults;

class resource extends Model
{
    /**
     * @var alertResults[]
     */
    public $alertResults;

    /**
     * @var int
     */
    public $groupId;
    protected $_name = [
        'alertResults' => 'AlertResults',
        'groupId' => 'GroupId',
    ];

    public function validate()
    {
        if (\is_array($this->alertResults)) {
            Model::validateArray($this->alertResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertResults) {
            if (\is_array($this->alertResults)) {
                $res['AlertResults'] = [];
                $n1 = 0;
                foreach ($this->alertResults as $item1) {
                    $res['AlertResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
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
        if (isset($map['AlertResults'])) {
            if (!empty($map['AlertResults'])) {
                $model->alertResults = [];
                $n1 = 0;
                foreach ($map['AlertResults'] as $item1) {
                    $model->alertResults[$n1] = alertResults::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        return $model;
    }
}
