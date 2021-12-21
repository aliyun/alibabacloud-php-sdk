<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeAppFollowCallRuleListResponseBody;

use AlibabaCloud\Tea\Model;

class appFollowCallRuleList extends Model
{
    /**
     * @description 应用ID
     *
     * @var string
     */
    public $appId;

    /**
     * @description 创建时间，秒级时间戳，如1614836732
     *
     * @var int
     */
    public $createdTs;

    /**
     * @description 创建时间，待删除
     *
     * @var int
     */
    public $gmtCreateTs;

    /**
     * @description 修改时间，待删除
     *
     * @var int
     */
    public $gmtModifiedTs;

    /**
     * @description 修改时间，秒级时间戳，如1614836732
     *
     * @var int
     */
    public $modifiedTs;

    /**
     * @description 具体规则，JSON格式
     *
     * @var string
     */
    public $rule;
    protected $_name = [
        'appId'         => 'AppId',
        'createdTs'     => 'CreatedTs',
        'gmtCreateTs'   => 'GmtCreateTs',
        'gmtModifiedTs' => 'GmtModifiedTs',
        'modifiedTs'    => 'ModifiedTs',
        'rule'          => 'Rule',
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
        if (null !== $this->createdTs) {
            $res['CreatedTs'] = $this->createdTs;
        }
        if (null !== $this->gmtCreateTs) {
            $res['GmtCreateTs'] = $this->gmtCreateTs;
        }
        if (null !== $this->gmtModifiedTs) {
            $res['GmtModifiedTs'] = $this->gmtModifiedTs;
        }
        if (null !== $this->modifiedTs) {
            $res['ModifiedTs'] = $this->modifiedTs;
        }
        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appFollowCallRuleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CreatedTs'])) {
            $model->createdTs = $map['CreatedTs'];
        }
        if (isset($map['GmtCreateTs'])) {
            $model->gmtCreateTs = $map['GmtCreateTs'];
        }
        if (isset($map['GmtModifiedTs'])) {
            $model->gmtModifiedTs = $map['GmtModifiedTs'];
        }
        if (isset($map['ModifiedTs'])) {
            $model->modifiedTs = $map['ModifiedTs'];
        }
        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }

        return $model;
    }
}
