<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaLiveChannelResponseBody\channel\outputGroups;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaLiveChannelResponseBody\channel\outputGroups\outputs\mediaPackageOutputSetting;
use AlibabaCloud\Tea\Model;

class outputs extends Model
{
    /**
     * @description The referenced AudioSettings.
     *
     * @var string[]
     */
    public $audioSettingNames;

    /**
     * @description The settings of the output delivered to MediaPackage.
     *
     * @var mediaPackageOutputSetting
     */
    public $mediaPackageOutputSetting;

    /**
     * @description The media type of the output.
     *
     * @example 0
     *
     * @var int
     */
    public $mediaType;

    /**
     * @description The name of the output.
     *
     * @example output1
     *
     * @var string
     */
    public $name;

    /**
     * @description The name of the referenced VideoSettings.
     *
     * @example myVideo1
     *
     * @var string
     */
    public $videoSettingName;
    protected $_name = [
        'audioSettingNames' => 'AudioSettingNames',
        'mediaPackageOutputSetting' => 'MediaPackageOutputSetting',
        'mediaType' => 'MediaType',
        'name' => 'Name',
        'videoSettingName' => 'VideoSettingName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioSettingNames) {
            $res['AudioSettingNames'] = $this->audioSettingNames;
        }
        if (null !== $this->mediaPackageOutputSetting) {
            $res['MediaPackageOutputSetting'] = null !== $this->mediaPackageOutputSetting ? $this->mediaPackageOutputSetting->toMap() : null;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->videoSettingName) {
            $res['VideoSettingName'] = $this->videoSettingName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outputs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioSettingNames'])) {
            if (!empty($map['AudioSettingNames'])) {
                $model->audioSettingNames = $map['AudioSettingNames'];
            }
        }
        if (isset($map['MediaPackageOutputSetting'])) {
            $model->mediaPackageOutputSetting = mediaPackageOutputSetting::fromMap($map['MediaPackageOutputSetting']);
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['VideoSettingName'])) {
            $model->videoSettingName = $map['VideoSettingName'];
        }

        return $model;
    }
}
