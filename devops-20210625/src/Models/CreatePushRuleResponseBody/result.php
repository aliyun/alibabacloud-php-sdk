<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreatePushRuleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreatePushRuleResponseBody\result\ruleInfos;

class result extends Model
{
    /**
     * @var string
     */
    public $gmtCreate;
    /**
     * @var string
     */
    public $gmtModified;
    /**
     * @var int
     */
    public $id;
    /**
     * @var ruleInfos[]
     */
    public $ruleInfos;
    protected $_name = [
        'gmtCreate'   => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'id'          => 'id',
        'ruleInfos'   => 'ruleInfos',
    ];

    public function validate()
    {
        if (\is_array($this->ruleInfos)) {
            Model::validateArray($this->ruleInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->ruleInfos) {
            if (\is_array($this->ruleInfos)) {
                $res['ruleInfos'] = [];
                $n1               = 0;
                foreach ($this->ruleInfos as $item1) {
                    $res['ruleInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['ruleInfos'])) {
            if (!empty($map['ruleInfos'])) {
                $model->ruleInfos = [];
                $n1               = 0;
                foreach ($map['ruleInfos'] as $item1) {
                    $model->ruleInfos[$n1++] = ruleInfos::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
