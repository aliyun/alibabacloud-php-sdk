<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssIncrementCheckSettingResponseBody;

use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssIncrementCheckSettingResponseBody\bizTypeTemplate\imageConfig;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssIncrementCheckSettingResponseBody\bizTypeTemplate\videoConfig;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssIncrementCheckSettingResponseBody\bizTypeTemplate\voiceConfig;
use AlibabaCloud\Tea\Model;

class bizTypeTemplate extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var imageConfig
     */
    public $imageConfig;

    /**
     * @var int
     */
    public $includeChannel;

    /**
     * @var string
     */
    public $name;

    /**
     * @var videoConfig
     */
    public $videoConfig;

    /**
     * @var voiceConfig
     */
    public $voiceConfig;
    protected $_name = [
        'bizType'        => 'BizType',
        'description'    => 'Description',
        'imageConfig'    => 'ImageConfig',
        'includeChannel' => 'IncludeChannel',
        'name'           => 'Name',
        'videoConfig'    => 'VideoConfig',
        'voiceConfig'    => 'VoiceConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->imageConfig) {
            $res['ImageConfig'] = null !== $this->imageConfig ? $this->imageConfig->toMap() : null;
        }
        if (null !== $this->includeChannel) {
            $res['IncludeChannel'] = $this->includeChannel;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->videoConfig) {
            $res['VideoConfig'] = null !== $this->videoConfig ? $this->videoConfig->toMap() : null;
        }
        if (null !== $this->voiceConfig) {
            $res['VoiceConfig'] = null !== $this->voiceConfig ? $this->voiceConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bizTypeTemplate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ImageConfig'])) {
            $model->imageConfig = imageConfig::fromMap($map['ImageConfig']);
        }
        if (isset($map['IncludeChannel'])) {
            $model->includeChannel = $map['IncludeChannel'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['VideoConfig'])) {
            $model->videoConfig = videoConfig::fromMap($map['VideoConfig']);
        }
        if (isset($map['VoiceConfig'])) {
            $model->voiceConfig = voiceConfig::fromMap($map['VoiceConfig']);
        }

        return $model;
    }
}
