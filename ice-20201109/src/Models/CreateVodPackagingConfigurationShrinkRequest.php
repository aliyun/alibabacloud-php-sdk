<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class CreateVodPackagingConfigurationShrinkRequest extends Model
{
    /**
     * @description The name of the packaging configuration. The name must be unique in an account and can be up to 128 characters in length. Letters, digits, underscores (_), and hyphens (-) are supported.
     *
     * @example hls_3s
     *
     * @var string
     */
    public $configurationName;

    /**
     * @description The description of the packaging configuration.
     *
     * @example HLS 3s vod packaging
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the packaging group. The name can be up to 128 characters in length. Letters, digits, underscores (_), and hyphens (-) are supported.
     *
     * @example vod_hls
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The packaging configuration.
     *
     * @var string
     */
    public $packageConfigShrink;

    /**
     * @description The package type.
     *
     *   HLS: packages content into TS segments for delivery over the HLS protocol.
     *   HLS_CMAF: packages content into CMAF segments for delivery over the HLS protocol.
     *   DASH: packages content for delivery over the DASH protocol.
     *
     * @example HLS
     *
     * @var string
     */
    public $protocol;
    protected $_name = [
        'configurationName' => 'ConfigurationName',
        'description' => 'Description',
        'groupName' => 'GroupName',
        'packageConfigShrink' => 'PackageConfig',
        'protocol' => 'Protocol',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->configurationName) {
            $res['ConfigurationName'] = $this->configurationName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->packageConfigShrink) {
            $res['PackageConfig'] = $this->packageConfigShrink;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVodPackagingConfigurationShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigurationName'])) {
            $model->configurationName = $map['ConfigurationName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['PackageConfig'])) {
            $model->packageConfigShrink = $map['PackageConfig'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        return $model;
    }
}
