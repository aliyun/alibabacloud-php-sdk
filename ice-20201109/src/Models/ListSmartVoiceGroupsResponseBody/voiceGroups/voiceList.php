<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartVoiceGroupsResponseBody\voiceGroups;

use AlibabaCloud\Tea\Model;

class voiceList extends Model
{
    /**
     * @description The speaker description.
     *
     * @var string
     */
    public $desc;

    /**
     * @description The speaker name.
     *
     * @var string
     */
    public $name;

    /**
     * @description The remarks of the speaker.
     *
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $supportSampleRate;

    /**
     * @description The tag of the speaker type.
     *
     * @var string
     */
    public $tag;

    /**
     * @description The speaker ID.
     *
     * @example zhitian
     *
     * @var string
     */
    public $voice;

    /**
     * @description The speaker type.
     *
     * Valid values:
     *
     *   Male
     *   Female
     *   Boy
     *   Girl
     *
     * @example Female
     *
     * @var string
     */
    public $voiceType;

    /**
     * @description The URL of the sample audio file.
     *
     * @example https://***.com/zhiqing.mp3
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return voiceList
     */
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
