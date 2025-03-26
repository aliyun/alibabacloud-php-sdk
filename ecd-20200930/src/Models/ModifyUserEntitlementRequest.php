<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ModifyUserEntitlementRequest extends Model
{
    /**
     * @var string[]
     */
    public $authorizeDesktopId;

    /**
     * @var string[]
     */
    public $endUserId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $revokeDesktopId;
    protected $_name = [
        'authorizeDesktopId' => 'AuthorizeDesktopId',
        'endUserId' => 'EndUserId',
        'regionId' => 'RegionId',
        'revokeDesktopId' => 'RevokeDesktopId',
    ];

    public function validate()
    {
        if (\is_array($this->authorizeDesktopId)) {
            Model::validateArray($this->authorizeDesktopId);
        }
        if (\is_array($this->endUserId)) {
            Model::validateArray($this->endUserId);
        }
        if (\is_array($this->revokeDesktopId)) {
            Model::validateArray($this->revokeDesktopId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizeDesktopId) {
            if (\is_array($this->authorizeDesktopId)) {
                $res['AuthorizeDesktopId'] = [];
                $n1 = 0;
                foreach ($this->authorizeDesktopId as $item1) {
                    $res['AuthorizeDesktopId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->endUserId) {
            if (\is_array($this->endUserId)) {
                $res['EndUserId'] = [];
                $n1 = 0;
                foreach ($this->endUserId as $item1) {
                    $res['EndUserId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->revokeDesktopId) {
            if (\is_array($this->revokeDesktopId)) {
                $res['RevokeDesktopId'] = [];
                $n1 = 0;
                foreach ($this->revokeDesktopId as $item1) {
                    $res['RevokeDesktopId'][$n1++] = $item1;
                }
            }
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
        if (isset($map['AuthorizeDesktopId'])) {
            if (!empty($map['AuthorizeDesktopId'])) {
                $model->authorizeDesktopId = [];
                $n1 = 0;
                foreach ($map['AuthorizeDesktopId'] as $item1) {
                    $model->authorizeDesktopId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['EndUserId'])) {
            if (!empty($map['EndUserId'])) {
                $model->endUserId = [];
                $n1 = 0;
                foreach ($map['EndUserId'] as $item1) {
                    $model->endUserId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RevokeDesktopId'])) {
            if (!empty($map['RevokeDesktopId'])) {
                $model->revokeDesktopId = [];
                $n1 = 0;
                foreach ($map['RevokeDesktopId'] as $item1) {
                    $model->revokeDesktopId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
