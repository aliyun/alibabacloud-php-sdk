<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SendMessageRequest\requestParams;

use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SendMessageRequest\requestParams\options\receiveScopeOption;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SendMessageRequest\requestParams\options\singleChatCreateRequest;
use AlibabaCloud\Tea\Model;

class options extends Model
{
    /**
     * @var receiveScopeOption
     */
    public $receiveScopeOption;

    /**
     * @example 0
     *
     * @var int
     */
    public $redPointPolicy;

    /**
     * @var singleChatCreateRequest
     */
    public $singleChatCreateRequest;
    protected $_name = [
        'receiveScopeOption'      => 'ReceiveScopeOption',
        'redPointPolicy'          => 'RedPointPolicy',
        'singleChatCreateRequest' => 'SingleChatCreateRequest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->receiveScopeOption) {
            $res['ReceiveScopeOption'] = null !== $this->receiveScopeOption ? $this->receiveScopeOption->toMap() : null;
        }
        if (null !== $this->redPointPolicy) {
            $res['RedPointPolicy'] = $this->redPointPolicy;
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
        if (isset($map['ReceiveScopeOption'])) {
            $model->receiveScopeOption = receiveScopeOption::fromMap($map['ReceiveScopeOption']);
        }
        if (isset($map['RedPointPolicy'])) {
            $model->redPointPolicy = $map['RedPointPolicy'];
        }
        if (isset($map['SingleChatCreateRequest'])) {
            $model->singleChatCreateRequest = singleChatCreateRequest::fromMap($map['SingleChatCreateRequest']);
        }

        return $model;
    }
}
