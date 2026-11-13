<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\ListWebFilterTemplatesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ListWebFilterTemplatesResponseBody\webFilterTemplates\ruleActionStatistics;

class webFilterTemplates extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var ruleActionStatistics
     */
    public $ruleActionStatistics;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $webFilterTemplateId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'name' => 'Name',
        'ruleActionStatistics' => 'RuleActionStatistics',
        'status' => 'Status',
        'webFilterTemplateId' => 'WebFilterTemplateId',
    ];

    public function validate()
    {
        if (null !== $this->ruleActionStatistics) {
            $this->ruleActionStatistics->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ruleActionStatistics) {
            $res['RuleActionStatistics'] = null !== $this->ruleActionStatistics ? $this->ruleActionStatistics->toArray($noStream) : $this->ruleActionStatistics;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->webFilterTemplateId) {
            $res['WebFilterTemplateId'] = $this->webFilterTemplateId;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RuleActionStatistics'])) {
            $model->ruleActionStatistics = ruleActionStatistics::fromMap($map['RuleActionStatistics']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['WebFilterTemplateId'])) {
            $model->webFilterTemplateId = $map['WebFilterTemplateId'];
        }

        return $model;
    }
}
