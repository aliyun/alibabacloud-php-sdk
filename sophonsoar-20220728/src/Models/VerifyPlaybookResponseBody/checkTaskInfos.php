<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\VerifyPlaybookResponseBody;

use AlibabaCloud\Dara\Model;

class checkTaskInfos extends Model
{
    /**
     * @var string
     */
    public $detail;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $riskLevel;
    protected $_name = [
        'detail' => 'Detail',
        'nodeName' => 'NodeName',
        'riskLevel' => 'RiskLevel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
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
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        return $model;
    }
}
