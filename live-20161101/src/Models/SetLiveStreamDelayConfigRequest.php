<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class SetLiveStreamDelayConfigRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $hlsDelay;

    /**
     * @var string
     */
    public $hlsLevel;

    /**
     * @var int
     */
    public $flvDelay;

    /**
     * @var string
     */
    public $flvLevel;

    /**
     * @var int
     */
    public $rtmpDelay;

    /**
     * @var string
     */
    public $rtmpLevel;
    protected $_name = [
        'ownerId'    => 'OwnerId',
        'domainName' => 'DomainName',
        'hlsDelay'   => 'HlsDelay',
        'hlsLevel'   => 'HlsLevel',
        'flvDelay'   => 'FlvDelay',
        'flvLevel'   => 'FlvLevel',
        'rtmpDelay'  => 'RtmpDelay',
        'rtmpLevel'  => 'RtmpLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->hlsDelay) {
            $res['HlsDelay'] = $this->hlsDelay;
        }
        if (null !== $this->hlsLevel) {
            $res['HlsLevel'] = $this->hlsLevel;
        }
        if (null !== $this->flvDelay) {
            $res['FlvDelay'] = $this->flvDelay;
        }
        if (null !== $this->flvLevel) {
            $res['FlvLevel'] = $this->flvLevel;
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['HlsDelay'])) {
            $model->hlsDelay = $map['HlsDelay'];
        }
        if (isset($map['HlsLevel'])) {
            $model->hlsLevel = $map['HlsLevel'];
        }
        if (isset($map['FlvDelay'])) {
            $model->flvDelay = $map['FlvDelay'];
        }
        if (isset($map['FlvLevel'])) {
            $model->flvLevel = $map['FlvLevel'];
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
