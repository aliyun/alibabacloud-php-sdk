<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260707\Models;

use AlibabaCloud\Dara\Model;

class BatchGetMediasRequest extends Model
{
    /**
     * @var int
     */
    public $authTimeout;

    /**
     * @var string
     */
    public $bizConfig;

    /**
     * @var string
     */
    public $mediaIds;

    /**
     * @var bool
     */
    public $returnDynamicMeta;
    protected $_name = [
        'authTimeout' => 'AuthTimeout',
        'bizConfig' => 'BizConfig',
        'mediaIds' => 'MediaIds',
        'returnDynamicMeta' => 'ReturnDynamicMeta',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authTimeout) {
            $res['AuthTimeout'] = $this->authTimeout;
        }

        if (null !== $this->bizConfig) {
            $res['BizConfig'] = $this->bizConfig;
        }

        if (null !== $this->mediaIds) {
            $res['MediaIds'] = $this->mediaIds;
        }

        if (null !== $this->returnDynamicMeta) {
            $res['ReturnDynamicMeta'] = $this->returnDynamicMeta;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthTimeout'])) {
            $model->authTimeout = $map['AuthTimeout'];
        }

        if (isset($map['BizConfig'])) {
            $model->bizConfig = $map['BizConfig'];
        }

        if (isset($map['MediaIds'])) {
            $model->mediaIds = $map['MediaIds'];
        }

        if (isset($map['ReturnDynamicMeta'])) {
            $model->returnDynamicMeta = $map['ReturnDynamicMeta'];
        }

        return $model;
    }
}
