<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetTenantApplicationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 企业id
     *
     * @var string
     */
    public $corporationId;

    /**
     * @description 业务id
     *
     * @var string
     */
    public $bizId;

    /**
     * @description 进度
     *
     * @var string
     */
    public $progress;

    /**
     * @description 云钉协同渠道
     *
     * @var string
     */
    public $channel;
    protected $_name = [
        'corporationId' => 'corporationId',
        'bizId'         => 'bizId',
        'progress'      => 'progress',
        'channel'       => 'channel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corporationId) {
            $res['corporationId'] = $this->corporationId;
        }
        if (null !== $this->bizId) {
            $res['bizId'] = $this->bizId;
        }
        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
        }
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['corporationId'])) {
            $model->corporationId = $map['corporationId'];
        }
        if (isset($map['bizId'])) {
            $model->bizId = $map['bizId'];
        }
        if (isset($map['progress'])) {
            $model->progress = $map['progress'];
        }
        if (isset($map['channel'])) {
            $model->channel = $map['channel'];
        }

        return $model;
    }
}
