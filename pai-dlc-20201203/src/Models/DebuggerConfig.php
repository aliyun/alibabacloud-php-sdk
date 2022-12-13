<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class DebuggerConfig extends Model
{
    /**
     * @example {\"description\":\"这是一个新的pytorchjob模板\"}
     *
     * @var string
     */
    public $content;

    /**
     * @example dc-vf9lowjt3pso
     *
     * @var string
     */
    public $debuggerConfigId;

    /**
     * @example 这是一个Pytorch的基础配置模板
     *
     * @var string
     */
    public $description;

    /**
     * @example Pytorch Experiment Config
     *
     * @var string
     */
    public $displayName;

    /**
     * @example 2021-01-12T14:35:00Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2021-01-12T14:36:00Z
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
