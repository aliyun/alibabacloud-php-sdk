<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SendMessageRequest\requestParams;

use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SendMessageRequest\requestParams\options\receiveScopeOption;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SendMessageRequest\requestParams\options\singleChatCreateRequest;
use AlibabaCloud\Tea\Model;

class options extends Model
{
    /**
     * @description 未读消息小红点控制。0:增加小红点; 1:不增加小红点
     *
     * @var int
     */
    public $redPointPolicy;

    /**
     * @description 接受相关设置
     *
     * @var receiveScopeOption
     */
    public $receiveScopeOption;

    /**
     * @description 单聊会话不存在时新建自定义单聊请求体
     *
     * @var singleChatCreateRequest
     */
    public $singleChatCreateRequest;
    protected $_name = [
        'redPointPolicy'          => 'RedPointPolicy',
        'receiveScopeOption'      => 'ReceiveScopeOption',
        'singleChatCreateRequest' => 'SingleChatCreateRequest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->redPointPolicy) {
            $res['RedPointPolicy'] = $this->redPointPolicy;
        }
        if (null !== $this->receiveScopeOption) {
            $res['ReceiveScopeOption'] = null !== $this->receiveScopeOption ? $this->receiveScopeOption->toMap() : null;
        }
        if (null !== $this->singleChatCreateRequest) {
            $res['SingleChatCreateRequest'] = null !== $this->singleChatCreateRequest ? $this->singleChatCreateRequest->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return options
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RedPointPolicy'])) {
            $model->redPointPolicy = $map['RedPointPolicy'];
        }
        if (isset($map['ReceiveScopeOption'])) {
            $model->receiveScopeOption = receiveScopeOption::fromMap($map['ReceiveScopeOption']);
        }
        if (isset($map['SingleChatCreateRequest'])) {
            $model->singleChatCreateRequest = singleChatCreateRequest::fromMap($map['SingleChatCreateRequest']);
        }

        return $model;
    }
}
