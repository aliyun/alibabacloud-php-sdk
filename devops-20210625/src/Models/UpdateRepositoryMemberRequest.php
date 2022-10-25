<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateRepositoryMemberRequest\relatedInfos;
use AlibabaCloud\Tea\Model;

class UpdateRepositoryMemberRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var int
     */
    public $accessLevel;

    /**
     * @var string
     */
    public $expireAt;

    /**
     * @var string
     */
    public $memberType;

    /**
     * @var string
     */
    public $relatedId;

    /**
     * @var relatedInfos[]
     */
    public $relatedInfos;

    /**
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'accessToken'    => 'accessToken',
        'accessLevel'    => 'accessLevel',
        'expireAt'       => 'expireAt',
        'memberType'     => 'memberType',
        'relatedId'      => 'relatedId',
        'relatedInfos'   => 'relatedInfos',
        'organizationId' => 'organizationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['accessToken'] = $this->accessToken;
        }
        if (null !== $this->accessLevel) {
            $res['accessLevel'] = $this->accessLevel;
        }
        if (null !== $this->expireAt) {
            $res['expireAt'] = $this->expireAt;
        }
        if (null !== $this->memberType) {
            $res['memberType'] = $this->memberType;
        }
        if (null !== $this->relatedId) {
            $res['relatedId'] = $this->relatedId;
        }
        if (null !== $this->relatedInfos) {
            $res['relatedInfos'] = [];
            if (null !== $this->relatedInfos && \is_array($this->relatedInfos)) {
                $n = 0;
                foreach ($this->relatedInfos as $item) {
                    $res['relatedInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRepositoryMemberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }
        if (isset($map['accessLevel'])) {
            $model->accessLevel = $map['accessLevel'];
        }
        if (isset($map['expireAt'])) {
            $model->expireAt = $map['expireAt'];
        }
        if (isset($map['memberType'])) {
            $model->memberType = $map['memberType'];
        }
        if (isset($map['relatedId'])) {
            $model->relatedId = $map['relatedId'];
        }
        if (isset($map['relatedInfos'])) {
            if (!empty($map['relatedInfos'])) {
                $model->relatedInfos = [];
                $n                   = 0;
                foreach ($map['relatedInfos'] as $item) {
                    $model->relatedInfos[$n++] = null !== $item ? relatedInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        return $model;
    }
}
