<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeAppExpMetricRuleListResponseBody;

use AlibabaCloud\Tea\Model;

class appExpMetricRuleList extends Model
{
    /**
     * @description 应用ID
     *
     * @var string
     */
    public $appId;

    /**
     * @description 具体规则，JSON格式
     *
     * @var string
     */
    public $rule;

    /**
     * @description 创建时间，秒级时间戳，如1614912647
     *
     * @var int
     */
    public $createdTs;

    /**
     * @description 修改时间，秒级时间戳，如1615272998
     *
     * @var int
     */
    public $modifiedTs;

    /**
     * @var int
     */
    public $gmtCreateTs;

    /**
     * @var int
     */
    public $gmtModifiedTs;
    protected $_name = [
        'appId'         => 'AppId',
        'rule'          => 'Rule',
        'createdTs'     => 'CreatedTs',
        'modifiedTs'    => 'ModifiedTs',
        'gmtCreateTs'   => 'GmtCreateTs',
        'gmtModifiedTs' => 'GmtModifiedTs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
        }
        if (null !== $this->createdTs) {
            $res['CreatedTs'] = $this->createdTs;
        }
        if (null !== $this->modifiedTs) {
            $res['ModifiedTs'] = $this->modifiedTs;
        }
        if (null !== $this->gmtCreateTs) {
            $res['GmtCreateTs'] = $this->gmtCreateTs;
        }
        if (null !== $this->gmtModifiedTs) {
            $res['GmtModifiedTs'] = $this->gmtModifiedTs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appExpMetricRuleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }
        if (isset($map['CreatedTs'])) {
            $model->createdTs = $map['CreatedTs'];
        }
        if (isset($map['ModifiedTs'])) {
            $model->modifiedTs = $map['ModifiedTs'];
        }
        if (isset($map['GmtCreateTs'])) {
            $model->gmtCreateTs = $map['GmtCreateTs'];
        }
        if (isset($map['GmtModifiedTs'])) {
            $model->gmtModifiedTs = $map['GmtModifiedTs'];
        }

        return $model;
    }
}
