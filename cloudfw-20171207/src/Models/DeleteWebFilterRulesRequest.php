<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DeleteWebFilterRulesRequest extends Model
{
    /**
     * @var string[]
     */
    public $webFilterRuleIds;
    protected $_name = [
        'webFilterRuleIds' => 'WebFilterRuleIds',
    ];

    public function validate()
    {
        if (\is_array($this->webFilterRuleIds)) {
            Model::validateArray($this->webFilterRuleIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->webFilterRuleIds) {
            if (\is_array($this->webFilterRuleIds)) {
                $res['WebFilterRuleIds'] = [];
                $n1 = 0;
                foreach ($this->webFilterRuleIds as $item1) {
                    $res['WebFilterRuleIds'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['WebFilterRuleIds'])) {
            if (!empty($map['WebFilterRuleIds'])) {
                $model->webFilterRuleIds = [];
                $n1 = 0;
                foreach ($map['WebFilterRuleIds'] as $item1) {
                    $model->webFilterRuleIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
