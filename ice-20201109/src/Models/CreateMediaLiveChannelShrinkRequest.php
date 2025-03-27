<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class CreateMediaLiveChannelShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $audioSettingsShrink;

    /**
     * @var string
     */
    public $inputAttachmentsShrink;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $outputGroupsShrink;

    /**
     * @var string
     */
    public $videoSettingsShrink;
    protected $_name = [
        'audioSettingsShrink' => 'AudioSettings',
        'inputAttachmentsShrink' => 'InputAttachments',
        'name' => 'Name',
        'outputGroupsShrink' => 'OutputGroups',
        'videoSettingsShrink' => 'VideoSettings',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioSettingsShrink) {
            $res['AudioSettings'] = $this->audioSettingsShrink;
        }

        if (null !== $this->inputAttachmentsShrink) {
            $res['InputAttachments'] = $this->inputAttachmentsShrink;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->outputGroupsShrink) {
            $res['OutputGroups'] = $this->outputGroupsShrink;
        }

        if (null !== $this->videoSettingsShrink) {
            $res['VideoSettings'] = $this->videoSettingsShrink;
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
        if (isset($map['AudioSettings'])) {
            $model->audioSettingsShrink = $map['AudioSettings'];
        }

        if (isset($map['InputAttachments'])) {
            $model->inputAttachmentsShrink = $map['InputAttachments'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OutputGroups'])) {
            $model->outputGroupsShrink = $map['OutputGroups'];
        }

        if (isset($map['VideoSettings'])) {
            $model->videoSettingsShrink = $map['VideoSettings'];
        }

        return $model;
    }
}
