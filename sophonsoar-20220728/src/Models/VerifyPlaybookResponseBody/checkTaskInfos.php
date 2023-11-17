<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\VerifyPlaybookResponseBody;

use AlibabaCloud\Tea\Model;

class checkTaskInfos extends Model
{
    /**
     * @example Node [python3_3] doesn\"t have the asset information
     *
     * @var string
     */
    public $detail;

    /**
     * @example python3_3
     *
     * @var string
     */
    public $nodeName;

    /**
     * @example error
     *
     * @var string
     */
    public $riskLevel;
    protected $_name = [
        'detail'    => 'Detail',
        'nodeName'  => 'NodeName',
        'riskLevel' => 'RiskLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return checkTaskInfos
     */
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
