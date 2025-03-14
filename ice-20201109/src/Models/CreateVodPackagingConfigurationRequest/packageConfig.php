<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\CreateVodPackagingConfigurationRequest;

use AlibabaCloud\SDK\ICE\V20201109\Models\CreateVodPackagingConfigurationRequest\packageConfig\drmProvider;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateVodPackagingConfigurationRequest\packageConfig\streamSelection;
use AlibabaCloud\Tea\Model;

class packageConfig extends Model
{
    /**
     * @description The settings of digital rights management (DRM) encryption.
     *
     * @var drmProvider
     */
    public $drmProvider;

    /**
     * @description The manifest name. The name can be up to 128 characters in length. Letters, digits, underscores (_), and hyphens (-) are supported.
     *
     * @example index
     *
     * @var string
     */
    public $manifestName;

    /**
     * @description The duration of each segment in a packaged stream. Unit: seconds. MediaPackage rounds segments to the nearest multiple of the input segment duration. Valid values: 1 to 30.
     *
     * @example 6
     *
     * @var int
     */
    public $segmentDuration;

    /**
     * @description The settings of stream selection.
     *
     * @var streamSelection
     */
    public $streamSelection;
    protected $_name = [
        'drmProvider' => 'DrmProvider',
        'manifestName' => 'ManifestName',
        'segmentDuration' => 'SegmentDuration',
        'streamSelection' => 'StreamSelection',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->drmProvider) {
            $res['DrmProvider'] = null !== $this->drmProvider ? $this->drmProvider->toMap() : null;
        }
        if (null !== $this->manifestName) {
            $res['ManifestName'] = $this->manifestName;
        }
        if (null !== $this->segmentDuration) {
            $res['SegmentDuration'] = $this->segmentDuration;
        }
        if (null !== $this->streamSelection) {
            $res['StreamSelection'] = null !== $this->streamSelection ? $this->streamSelection->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return packageConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DrmProvider'])) {
            $model->drmProvider = drmProvider::fromMap($map['DrmProvider']);
        }
        if (isset($map['ManifestName'])) {
            $model->manifestName = $map['ManifestName'];
        }
        if (isset($map['SegmentDuration'])) {
            $model->segmentDuration = $map['SegmentDuration'];
        }
        if (isset($map['StreamSelection'])) {
            $model->streamSelection = streamSelection::fromMap($map['StreamSelection']);
        }

        return $model;
    }
}
