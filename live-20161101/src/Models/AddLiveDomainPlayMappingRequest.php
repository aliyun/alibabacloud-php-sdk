<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddLiveDomainPlayMappingRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The sub-streaming domain.
     *
     * This parameter is required.
     *
     * @example example.aliyundoc.com
     *
     * @var string
     */
    public $playDomain;

    /**
     * @description The main streaming domain.
     *
     * This parameter is required.
     *
     * @example example.com
     *
     * @var string
     */
    public $pullDomain;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'ownerId' => 'OwnerId',
        'playDomain' => 'PlayDomain',
        'pullDomain' => 'PullDomain',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->playDomain) {
            $res['PlayDomain'] = $this->playDomain;
        }
        if (null !== $this->pullDomain) {
            $res['PullDomain'] = $this->pullDomain;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddLiveDomainPlayMappingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PlayDomain'])) {
            $model->playDomain = $map['PlayDomain'];
        }
        if (isset($map['PullDomain'])) {
            $model->pullDomain = $map['PullDomain'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
