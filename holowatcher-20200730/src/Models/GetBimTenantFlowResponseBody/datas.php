<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimTenantFlowResponseBody;

use AlibabaCloud\Tea\Model;

class datas extends Model
{
    /**
     * @description 单位（B,KB,M）
     *
     * @var string
     */
    public $company;

    /**
     * @description 总流量
     *
     * @var int
     */
    public $flow;

    /**
     * @description 已用流量
     *
     * @var int
     */
    public $usedFlow;
    protected $_name = [
        'company'  => 'Company',
        'flow'     => 'Flow',
        'usedFlow' => 'UsedFlow',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->company) {
            $res['Company'] = $this->company;
        }
        if (null !== $this->flow) {
            $res['Flow'] = $this->flow;
        }
        if (null !== $this->usedFlow) {
            $res['UsedFlow'] = $this->usedFlow;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return datas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Company'])) {
            $model->company = $map['Company'];
        }
        if (isset($map['Flow'])) {
            $model->flow = $map['Flow'];
        }
        if (isset($map['UsedFlow'])) {
            $model->usedFlow = $map['UsedFlow'];
        }

        return $model;
    }
}
