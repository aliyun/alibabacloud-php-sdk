<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartVoiceGroupsResponseBody\voiceGroups;

use AlibabaCloud\Dara\Model;

class voiceList extends Model
{
    /**
     * @var string
     */
    public $desc;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $remark;
    /**
     * @var string
     */
    public $supportSampleRate;
    /**
     * @var string
     */
    public $tag;
    /**
     * @var string
     */
    public $voice;
    /**
     * @var string
     */
    public $voiceType;
    /**
     * @var string
     */
    public $voiceUrl;
    protected $_name = [
        'desc'              => 'Desc',
        'name'              => 'Name',
        'remark'            => 'Remark',
        'supportSampleRate' => 'SupportSampleRate',
        'tag'               => 'Tag',
        'voice'             => 'Voice',
        'voiceType'         => 'VoiceType',
        'voiceUrl'          => 'VoiceUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->supportSampleRate) {
            $res['SupportSampleRate'] = $this->supportSampleRate;
        }

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        if (null !== $this->voice) {
            $res['Voice'] = $this->voice;
        }

        if (null !== $this->voiceType) {
            $res['VoiceType'] = $this->voiceType;
        }

        if (null !== $this->voiceUrl) {
            $res['VoiceUrl'] = $this->voiceUrl;
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
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['SupportSampleRate'])) {
            $model->supportSampleRate = $map['SupportSampleRate'];
        }

        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        if (isset($map['Voice'])) {
            $model->voice = $map['Voice'];
        }

        if (isset($map['VoiceType'])) {
            $model->voiceType = $map['VoiceType'];
        }

        if (isset($map['VoiceUrl'])) {
            $model->voiceUrl = $map['VoiceUrl'];
        }

        return $model;
    }
}
