<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DeleteNetworkPackagesRequest extends Model
{
    /**
     * @var string[]
     */
    public $networkPackageId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resellerOwnerUid;
    protected $_name = [
        'networkPackageId' => 'NetworkPackageId',
        'regionId' => 'RegionId',
        'resellerOwnerUid' => 'ResellerOwnerUid',
    ];

    public function validate()
    {
        if (\is_array($this->networkPackageId)) {
            Model::validateArray($this->networkPackageId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkPackageId) {
            if (\is_array($this->networkPackageId)) {
                $res['NetworkPackageId'] = [];
                $n1 = 0;
                foreach ($this->networkPackageId as $item1) {
                    $res['NetworkPackageId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resellerOwnerUid) {
            $res['ResellerOwnerUid'] = $this->resellerOwnerUid;
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
        if (isset($map['NetworkPackageId'])) {
            if (!empty($map['NetworkPackageId'])) {
                $model->networkPackageId = [];
                $n1 = 0;
                foreach ($map['NetworkPackageId'] as $item1) {
                    $model->networkPackageId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResellerOwnerUid'])) {
            $model->resellerOwnerUid = $map['ResellerOwnerUid'];
        }

        return $model;
    }
}
