<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveChannelRequest\outputGroups;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveChannelRequest\outputGroups\outputs\mediaPackageOutputSetting;

class outputs extends Model
{
    /**
     * @var string[]
     */
    public $audioSettingNames;

    /**
     * @var mediaPackageOutputSetting
     */
    public $mediaPackageOutputSetting;

    /**
     * @var int
     */
    public $mediaType;

    /**
     * @var string
     */
    public $name;

    /**
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

    public function validate()
    {
        if (\is_array($this->audioSettingNames)) {
            Model::validateArray($this->audioSettingNames);
        }
        if (null !== $this->mediaPackageOutputSetting) {
            $this->mediaPackageOutputSetting->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioSettingNames) {
            if (\is_array($this->audioSettingNames)) {
                $res['AudioSettingNames'] = [];
                $n1 = 0;
                foreach ($this->audioSettingNames as $item1) {
                    $res['AudioSettingNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mediaPackageOutputSetting) {
            $res['MediaPackageOutputSetting'] = null !== $this->mediaPackageOutputSetting ? $this->mediaPackageOutputSetting->toArray($noStream) : $this->mediaPackageOutputSetting;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioSettingNames'])) {
            if (!empty($map['AudioSettingNames'])) {
                $model->audioSettingNames = [];
                $n1 = 0;
                foreach ($map['AudioSettingNames'] as $item1) {
                    $model->audioSettingNames[$n1] = $item1;
                    ++$n1;
                }
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
