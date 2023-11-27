<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SendMessageRequest\requestParams\options;

use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RequestParamsOptionsSingleChatCreateRequestUserConversationValue;
use AlibabaCloud\Tea\Model;

class singleChatCreateRequest extends Model
{
    /**
     * @example $3$123:567
     *
     * @var string
     */
    public $appCid;

    /**
     * @var string[]
     */
    public $appUids;

    /**
     * @var string[]
     */
    public $extensions;

    /**
     * @var RequestParamsOptionsSingleChatCreateRequestUserConversationValue[]
     */
    public $userConversation;
    protected $_name = [
        'appCid'           => 'AppCid',
        'appUids'          => 'AppUids',
        'extensions'       => 'Extensions',
        'userConversation' => 'UserConversation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCid) {
            $res['AppCid'] = $this->appCid;
        }
        if (null !== $this->appUids) {
            $res['AppUids'] = $this->appUids;
        }
        if (null !== $this->extensions) {
            $res['Extensions'] = $this->extensions;
        }
        if (null !== $this->userConversation) {
            $res['UserConversation'] = [];
            if (null !== $this->userConversation && \is_array($this->userConversation)) {
                foreach ($this->userConversation as $key => $val) {
                    $res['UserConversation'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return singleChatCreateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCid'])) {
            $model->appCid = $map['AppCid'];
        }
        if (isset($map['AppUids'])) {
            if (!empty($map['AppUids'])) {
                $model->appUids = $map['AppUids'];
            }
        }
        if (isset($map['Extensions'])) {
            $model->extensions = $map['Extensions'];
        }
        if (isset($map['UserConversation'])) {
            $model->userConversation = $map['UserConversation'];
        }

        return $model;
    }
}
