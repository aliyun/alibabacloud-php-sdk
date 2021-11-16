<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetTenantApplicationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 业务id
     *
     * @var string
     */
    public $bizId;

    /**
     * @description 云钉协同渠道
     *
     * @var string
     */
    public $channel;

    /**
     * @description 企业id
     *
     * @var string
     */
    public $corporationId;

    /**
     * @description 进度
     *
     * @var string
     */
    public $progress;
    protected $_name = [
        'bizId'         => 'bizId',
        'channel'       => 'channel',
        'corporationId' => 'corporationId',
        'progress'      => 'progress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['bizId'] = $this->bizId;
        }
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        if (null !== $this->corporationId) {
            $res['corporationId'] = $this->corporationId;
        }
        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
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
        if (isset($map['bizId'])) {
            $model->bizId = $map['bizId'];
        }
        if (isset($map['channel'])) {
            $model->channel = $map['channel'];
        }
        if (isset($map['corporationId'])) {
            $model->corporationId = $map['corporationId'];
        }
        if (isset($map['progress'])) {
            $model->progress = $map['progress'];
        }

        return $model;
    }
}
