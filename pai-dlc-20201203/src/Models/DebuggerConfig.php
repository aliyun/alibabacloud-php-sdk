<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class DebuggerConfig extends Model
{
    /**
     * @description 配置项细节，json结构
     *
     * @var string
     */
    public $content;

    /**
     * @description 系统生成的debug config唯一ID
     *
     * @var string
     */
    public $debuggerConfigId;

    /**
     * @description 配置项描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 模板配置项名称
     *
     * @var string
     */
    public $displayName;

    /**
     * @description 创建时间（UTC）
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @description 修改时间（UTC）
     *
     * @var string
     */
    public $gmtModifyTime;
    protected $_name = [
        'content'          => 'Content',
        'debuggerConfigId' => 'DebuggerConfigId',
        'description'      => 'Description',
        'displayName'      => 'DisplayName',
        'gmtCreateTime'    => 'GmtCreateTime',
        'gmtModifyTime'    => 'GmtModifyTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->debuggerConfigId) {
            $res['DebuggerConfigId'] = $this->debuggerConfigId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifyTime) {
            $res['GmtModifyTime'] = $this->gmtModifyTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DebuggerConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['DebuggerConfigId'])) {
            $model->debuggerConfigId = $map['DebuggerConfigId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifyTime'])) {
            $model->gmtModifyTime = $map['GmtModifyTime'];
        }

        return $model;
    }
}
