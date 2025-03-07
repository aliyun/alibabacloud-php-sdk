<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveChannelRequest\outputGroups\outputs;

use AlibabaCloud\Tea\Model;

class mediaPackageOutputSetting extends Model
{
    /**
     * @description The manifest audio group ID. To associate several audio tracks into one group, assign the same audio group ID. Viewers can select a track as needed. Letters, digits, hyphens (-), and underscores (_) are supported. It can be up to 40 characters in length.
     *
     * @example audiogroup
     *
     * @var string
     */
    public $audioGroupId;

    /**
     * @description The manifest name modifier. The child manifests include this modifier in their M3U8 file names. Letters, digits, hyphens (-), and underscores (_) are supported. The maximum length is 40 characters.
     *
     * @example 480p
     *
     * @var string
     */
    public $nameModifier;
    protected $_name = [
        'audioGroupId' => 'AudioGroupId',
        'nameModifier' => 'NameModifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioGroupId) {
            $res['AudioGroupId'] = $this->audioGroupId;
        }
        if (null !== $this->nameModifier) {
            $res['NameModifier'] = $this->nameModifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaPackageOutputSetting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioGroupId'])) {
            $model->audioGroupId = $map['AudioGroupId'];
        }
        if (isset($map['NameModifier'])) {
            $model->nameModifier = $map['NameModifier'];
        }

        return $model;
    }
}
