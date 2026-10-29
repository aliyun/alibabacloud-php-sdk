<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Httpdns\V20160201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\SdnsVerifyRuleCategoryRequest\rules;

class SdnsVerifyRuleCategoryRequest extends Model
{
    /**
     * @var string[]
     */
    public $args;

    /**
     * @var string
     */
    public $cip;

    /**
     * @var string[]
     */
    public $clientIpRanges;

    /**
     * @var string
     */
    public $matchType;

    /**
     * @var rules[]
     */
    public $rules;
    protected $_name = [
        'args' => 'Args',
        'cip' => 'Cip',
        'clientIpRanges' => 'ClientIpRanges',
        'matchType' => 'MatchType',
        'rules' => 'Rules',
    ];

    public function validate()
    {
        if (\is_array($this->args)) {
            Model::validateArray($this->args);
        }
        if (\is_array($this->clientIpRanges)) {
            Model::validateArray($this->clientIpRanges);
        }
        if (\is_array($this->rules)) {
            Model::validateArray($this->rules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->args) {
            if (\is_array($this->args)) {
                $res['Args'] = [];
                foreach ($this->args as $key1 => $value1) {
                    $res['Args'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->cip) {
            $res['Cip'] = $this->cip;
        }

        if (null !== $this->clientIpRanges) {
            if (\is_array($this->clientIpRanges)) {
                $res['ClientIpRanges'] = [];
                $n1 = 0;
                foreach ($this->clientIpRanges as $item1) {
                    $res['ClientIpRanges'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->matchType) {
            $res['MatchType'] = $this->matchType;
        }

        if (null !== $this->rules) {
            if (\is_array($this->rules)) {
                $res['Rules'] = [];
                $n1 = 0;
                foreach ($this->rules as $item1) {
                    $res['Rules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Args'])) {
            if (!empty($map['Args'])) {
                $model->args = [];
                foreach ($map['Args'] as $key1 => $value1) {
                    $model->args[$key1] = $value1;
                }
            }
        }

        if (isset($map['Cip'])) {
            $model->cip = $map['Cip'];
        }

        if (isset($map['ClientIpRanges'])) {
            if (!empty($map['ClientIpRanges'])) {
                $model->clientIpRanges = [];
                $n1 = 0;
                foreach ($map['ClientIpRanges'] as $item1) {
                    $model->clientIpRanges[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MatchType'])) {
            $model->matchType = $map['MatchType'];
        }

        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n1 = 0;
                foreach ($map['Rules'] as $item1) {
                    $model->rules[$n1] = rules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
