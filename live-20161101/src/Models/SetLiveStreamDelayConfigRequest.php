<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class SetLiveStreamDelayConfigRequest extends Model
{
    /**
     * @description The streaming domain.
     *
     * This parameter is required.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The latency of FLV-based playback. Unit: seconds.
     *
     * >  If this parameter is left empty, the latency is set to a value corresponding to the FlvLevel parameter.
     *
     * @example 8
     *
     * @var int
     */
    public $flvDelay;

    /**
     * @description The latency level of FLV-based playback. Ignore this parameter if the FlvDelay parameter is configured.
     *
     * Valid values:
     *
     *   **short** (default): The latency is 4 seconds.
     *   **medium**: The latency is 8 seconds.
     *   **long**: The latency is 16 seconds.
     *
     * >  If both the FlvDelay and FlvLevel parameters are left empty, FlvLevel is set to **short** by default.
     *
     * @example medium
     *
     * @var string
     */
    public $flvLevel;

    /**
     * @description The latency of HLS-based playback. Unit: seconds.
     *
     * >  If this parameter is left empty, the latency is set to a value corresponding to the HlsLevel parameter.
     *
     * @example 4
     *
     * @var int
     */
    public $hlsDelay;

    /**
     * @description The latency level of HLS-based playback. Ignore this parameter if the HlsDelay parameter is configured.
     *
     * Valid values:
     *
     *   **short**: The latency is 3 seconds. This is the default value.
     *   **medium**: The latency is 6 seconds.
     *   **long**: The latency is 15 seconds.
     *
     * >  If both the HlsDelay and HlsLevel parameters are left empty, HlsLevel is set to **short** by default.
     *
     * @example short
     *
     * @var string
     */
    public $hlsLevel;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The latency of RTMP-based playback. Unit: seconds.
     *
     * >  If this parameter is left empty, the latency is set to a value corresponding to the RtmpLevel parameter.
     *
     * @example 4
     *
     * @var int
     */
    public $rtmpDelay;

    /**
     * @description The latency level of RTMP-based playback. Ignore this parameter if the RtmpDelay parameter is configured.
     *
     * Valid values:
     *
     *   **short** (default): The latency is 4 seconds.
     *   **medium**: The latency is 8 seconds.
     *   **long**: The latency is 16 seconds.
     *
     * >  If both the RtmpDelay and RtmpLevel parameters are left empty, RtmpLevel is set to **short** by default.
     *
     * @example short
     *
     * @var string
     */
    public $rtmpLevel;
    protected $_name = [
        'domainName' => 'DomainName',
        'flvDelay' => 'FlvDelay',
        'flvLevel' => 'FlvLevel',
        'hlsDelay' => 'HlsDelay',
        'hlsLevel' => 'HlsLevel',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'rtmpDelay' => 'RtmpDelay',
        'rtmpLevel' => 'RtmpLevel',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->flvDelay) {
            $res['FlvDelay'] = $this->flvDelay;
        }
        if (null !== $this->flvLevel) {
            $res['FlvLevel'] = $this->flvLevel;
        }
        if (null !== $this->hlsDelay) {
            $res['HlsDelay'] = $this->hlsDelay;
        }
        if (null !== $this->hlsLevel) {
            $res['HlsLevel'] = $this->hlsLevel;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->rtmpDelay) {
            $res['RtmpDelay'] = $this->rtmpDelay;
        }
        if (null !== $this->rtmpLevel) {
            $res['RtmpLevel'] = $this->rtmpLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetLiveStreamDelayConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['FlvDelay'])) {
            $model->flvDelay = $map['FlvDelay'];
        }
        if (isset($map['FlvLevel'])) {
            $model->flvLevel = $map['FlvLevel'];
        }
        if (isset($map['HlsDelay'])) {
            $model->hlsDelay = $map['HlsDelay'];
        }
        if (isset($map['HlsLevel'])) {
            $model->hlsLevel = $map['HlsLevel'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RtmpDelay'])) {
            $model->rtmpDelay = $map['RtmpDelay'];
        }
        if (isset($map['RtmpLevel'])) {
            $model->rtmpLevel = $map['RtmpLevel'];
        }

        return $model;
    }
}
