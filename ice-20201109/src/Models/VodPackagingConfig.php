<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\VodPackagingConfig\drmProvider;
use AlibabaCloud\SDK\ICE\V20201109\Models\VodPackagingConfig\streamSelection;
use AlibabaCloud\Tea\Model;

class VodPackagingConfig extends Model
{
    /**
     * @var drmProvider
     */
    public $drmProvider;

    /**
     * @var string
     */
    public $manifestName;

    /**
     * @var int
     */
    public $segmentDuration;

    /**
     * @var streamSelection
     */
    public $streamSelection;
    protected $_name = [
        'drmProvider'     => 'DrmProvider',
        'manifestName'    => 'ManifestName',
        'segmentDuration' => 'SegmentDuration',
        'streamSelection' => 'StreamSelection',
    ];

    public function validate()
    {
    }

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
     * @return VodPackagingConfig
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
