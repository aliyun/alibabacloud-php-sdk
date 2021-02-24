<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RecallMessageRequest;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @description 操作者ID
     *
     * @var string
     */
    public $appUid;

    /**
     * @description 会话ID
     *
     * @var string
     */
    public $appCid;

    /**
     * @description 消息ID
     *
     * @var string
     */
    public $msgId;

    /**
     * @description 撤回显示类型（默认为0)。0：静默撤回，不显示撤回信息，1：普通撤回，显示撤回信息；
     *
     * @var int
     */
    public $type;

    /**
     * @description 操作者类型(默认为0)。0: 发送者; 1: 群主; 2: 系统; 3: 安全合规; 101: 业务自定义类型
     *
     * @var int
     */
    public $operatorType;

    /**
     * @description 业务自定义扩展字段
     *
     * @var string[]
     */
    public $extensions;
    protected $_name = [
        'appUid'       => 'AppUid',
        'appCid'       => 'AppCid',
        'msgId'        => 'MsgId',
        'type'         => 'Type',
        'operatorType' => 'OperatorType',
        'extensions'   => 'Extensions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appUid) {
            $res['AppUid'] = $this->appUid;
        }
        if (null !== $this->appCid) {
            $res['AppCid'] = $this->appCid;
        }
        if (null !== $this->msgId) {
            $res['MsgId'] = $this->msgId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->operatorType) {
            $res['OperatorType'] = $this->operatorType;
        }
        if (null !== $this->extensions) {
            $res['Extensions'] = $this->extensions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppUid'])) {
            $model->appUid = $map['AppUid'];
        }
        if (isset($map['AppCid'])) {
            $model->appCid = $map['AppCid'];
        }
        if (isset($map['MsgId'])) {
            $model->msgId = $map['MsgId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['OperatorType'])) {
            $model->operatorType = $map['OperatorType'];
        }
        if (isset($map['Extensions'])) {
            $model->extensions = $map['Extensions'];
        }

        return $model;
    }
}
