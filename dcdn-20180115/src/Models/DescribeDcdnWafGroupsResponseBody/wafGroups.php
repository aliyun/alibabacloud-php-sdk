<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafGroupsResponseBody;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafGroupsResponseBody\wafGroups\policies;
use AlibabaCloud\Tea\Model;

class wafGroups extends Model
{
    /**
     * @description The time when the WAF rule group was modified.
     *
     * @example 2020-04-12 22:25:11
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the custom WAF rule group.
     *
     * @example 30000156
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the WAF rule.
     *
     * @example DCDN-test-operation-reports-1
     *
     * @var string
     */
    public $name;

    /**
     * @description The policy that is associated with the WAF rule group.
     *
     * @var policies[]
     */
    public $policies;

    /**
     * @description The number of WAF rules.
     *
     * @example 452
     *
     * @var int
     */
    public $ruleCount;

    /**
     * @description Indicates whether to enable subscription. Valid values:
     *
     *   **on**
     *   **off**
     *
     * @example on
     *
     * @var string
     */
    public $subscribe;

    /**
     * @description The ID of the template.
     *
     * @example 1012
     *
     * @var int
     */
    public $templateId;
    protected $_name = [
        'gmtModified' => 'GmtModified',
        'id'          => 'Id',
        'name'        => 'Name',
        'policies'    => 'Policies',
        'ruleCount'   => 'RuleCount',
        'subscribe'   => 'Subscribe',
        'templateId'  => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->policies) {
            $res['Policies'] = [];
            if (null !== $this->policies && \is_array($this->policies)) {
                $n = 0;
                foreach ($this->policies as $item) {
                    $res['Policies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ruleCount) {
            $res['RuleCount'] = $this->ruleCount;
        }
        if (null !== $this->subscribe) {
            $res['Subscribe'] = $this->subscribe;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return wafGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Policies'])) {
            if (!empty($map['Policies'])) {
                $model->policies = [];
                $n               = 0;
                foreach ($map['Policies'] as $item) {
                    $model->policies[$n++] = null !== $item ? policies::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RuleCount'])) {
            $model->ruleCount = $map['RuleCount'];
        }
        if (isset($map['Subscribe'])) {
            $model->subscribe = $map['Subscribe'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
