<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengpush\V20220225\Models;

use AlibabaCloud\Tea\Model;

class ChannelProperties extends Model
{
    /**
     * @var string
     */
    public $channelActivity;

    /**
     * @var string
     */
    public $mainActivity;

    /**
     * @var string
     */
    public $oppoChannelId;

    /**
     * @var string
     */
    public $vivoClassification;

    /**
     * @var string
     */
    public $xiaomiChannelId;
    protected $_name = [
        'channelActivity'    => 'channelActivity',
        'mainActivity'       => 'mainActivity',
        'oppoChannelId'      => 'oppoChannelId',
        'vivoClassification' => 'vivoClassification',
        'xiaomiChannelId'    => 'xiaomiChannelId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelActivity) {
            $res['channelActivity'] = $this->channelActivity;
        }
        if (null !== $this->mainActivity) {
            $res['mainActivity'] = $this->mainActivity;
        }
        if (null !== $this->oppoChannelId) {
            $res['oppoChannelId'] = $this->oppoChannelId;
        }
        if (null !== $this->vivoClassification) {
            $res['vivoClassification'] = $this->vivoClassification;
        }
        if (null !== $this->xiaomiChannelId) {
            $res['xiaomiChannelId'] = $this->xiaomiChannelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChannelProperties
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['channelActivity'])) {
            $model->channelActivity = $map['channelActivity'];
        }
        if (isset($map['mainActivity'])) {
            $model->mainActivity = $map['mainActivity'];
        }
        if (isset($map['oppoChannelId'])) {
            $model->oppoChannelId = $map['oppoChannelId'];
        }
        if (isset($map['vivoClassification'])) {
            $model->vivoClassification = $map['vivoClassification'];
        }
        if (isset($map['xiaomiChannelId'])) {
            $model->xiaomiChannelId = $map['xiaomiChannelId'];
        }

        return $model;
    }
}
