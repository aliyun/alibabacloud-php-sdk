<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateStandardTemplateRequest\createCommand\codeRuleConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateStandardTemplateRequest\createCommand\codeRuleConfig\autoConfig\codeRuleList;

class autoConfig extends Model
{
    /**
     * @var codeRuleList[]
     */
    public $codeRuleList;

    /**
     * @var bool
     */
    public $needStrongValidate;
    protected $_name = [
        'codeRuleList' => 'CodeRuleList',
        'needStrongValidate' => 'NeedStrongValidate',
    ];

    public function validate()
    {
        if (\is_array($this->codeRuleList)) {
            Model::validateArray($this->codeRuleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codeRuleList) {
            if (\is_array($this->codeRuleList)) {
                $res['CodeRuleList'] = [];
                $n1 = 0;
                foreach ($this->codeRuleList as $item1) {
                    $res['CodeRuleList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->needStrongValidate) {
            $res['NeedStrongValidate'] = $this->needStrongValidate;
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
        if (isset($map['CodeRuleList'])) {
            if (!empty($map['CodeRuleList'])) {
                $model->codeRuleList = [];
                $n1 = 0;
                foreach ($map['CodeRuleList'] as $item1) {
                    $model->codeRuleList[$n1] = codeRuleList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NeedStrongValidate'])) {
            $model->needStrongValidate = $map['NeedStrongValidate'];
        }

        return $model;
    }
}
