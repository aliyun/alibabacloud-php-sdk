<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaLiveChannelsResponseBody\channels\outputGroups\outputs;

use AlibabaCloud\Tea\Model;

class mediaPackageOutputSetting extends Model
{
    /**
     * @description The manifest audio group ID.
     *
     * @example audiogroup
     *
     * @var string
     */
    public $audioGroupId;

    /**
     * @description The manifest name modifier. The child manifests include this modifier in their M3U8 file names.
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

    public function validate() {}

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
