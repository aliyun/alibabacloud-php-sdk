<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SendMessageRequest;

use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SendMessageRequest\requestParams\options;
use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @example $1$123:567
     *
     * @var string
     */
    public $appCid;

    /**
     * @example {"text":"hello world"}
     *
     * @var string
     */
    public $content;

    /**
     * @example 1
     *
     * @var int
     */
    public $contentType;

    /**
     * @example 1
     *
     * @var int
     */
    public $conversationType;

    /**
     * @var string[]
     */
    public $extensions;

    /**
     * @var options
     */
    public $options;

    /**
     * @example 950000010
     *
     * @var string
     */
    public $senderId;

    /**
     * @example 8c086146-889e-4642-b3d9-17e97ae6****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'appCid'           => 'AppCid',
        'content'          => 'Content',
        'contentType'      => 'ContentType',
        'conversationType' => 'ConversationType',
        'extensions'       => 'Extensions',
        'options'          => 'Options',
        'senderId'         => 'SenderId',
        'uuid'             => 'Uuid',
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
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->conversationType) {
            $res['ConversationType'] = $this->conversationType;
        }
        if (null !== $this->extensions) {
            $res['Extensions'] = $this->extensions;
        }
        if (null !== $this->options) {
            $res['Options'] = null !== $this->options ? $this->options->toMap() : null;
        }
        if (null !== $this->senderId) {
            $res['SenderId'] = $this->senderId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['AppCid'])) {
            $model->appCid = $map['AppCid'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['ConversationType'])) {
            $model->conversationType = $map['ConversationType'];
        }
        if (isset($map['Extensions'])) {
            $model->extensions = $map['Extensions'];
        }
        if (isset($map['Options'])) {
            $model->options = options::fromMap($map['Options']);
        }
        if (isset($map['SenderId'])) {
            $model->senderId = $map['SenderId'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
