<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DeleteLiveDomainPlayMappingRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $playDomain;

    /**
     * @var string
     */
    public $pullDomain;
    protected $_name = [
        'ownerId'    => 'OwnerId',
        'playDomain' => 'PlayDomain',
        'pullDomain' => 'PullDomain',
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
        if (null !== $this->playDomain) {
            $res['PlayDomain'] = $this->playDomain;
        }
        if (null !== $this->pullDomain) {
            $res['PullDomain'] = $this->pullDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLiveDomainPlayMappingRequest
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

        return $model;
    }
}
