<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class BatchModifyEntitlementRequest extends Model
{
    /**
     * @var string[]
     */
    public $desktopId;

    /**
     * @var string[]
     */
    public $endUserId;

    /**
     * @var int
     */
    public $maxDesktopPerUser;

    /**
     * @var int
     */
    public $maxUserPerDesktop;

    /**
     * @var bool
     */
    public $preview;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $strategy;
    protected $_name = [
        'desktopId' => 'DesktopId',
        'endUserId' => 'EndUserId',
        'maxDesktopPerUser' => 'MaxDesktopPerUser',
        'maxUserPerDesktop' => 'MaxUserPerDesktop',
        'preview' => 'Preview',
        'regionId' => 'RegionId',
        'strategy' => 'Strategy',
    ];

    public function validate()
    {
        if (\is_array($this->desktopId)) {
            Model::validateArray($this->desktopId);
        }
        if (\is_array($this->endUserId)) {
            Model::validateArray($this->endUserId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desktopId) {
            if (\is_array($this->desktopId)) {
                $res['DesktopId'] = [];
                $n1 = 0;
                foreach ($this->desktopId as $item1) {
                    $res['DesktopId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endUserId) {
            if (\is_array($this->endUserId)) {
                $res['EndUserId'] = [];
                $n1 = 0;
                foreach ($this->endUserId as $item1) {
                    $res['EndUserId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxDesktopPerUser) {
            $res['MaxDesktopPerUser'] = $this->maxDesktopPerUser;
        }

        if (null !== $this->maxUserPerDesktop) {
            $res['MaxUserPerDesktop'] = $this->maxUserPerDesktop;
        }

        if (null !== $this->preview) {
            $res['Preview'] = $this->preview;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
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
        if (isset($map['DesktopId'])) {
            if (!empty($map['DesktopId'])) {
                $model->desktopId = [];
                $n1 = 0;
                foreach ($map['DesktopId'] as $item1) {
                    $model->desktopId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EndUserId'])) {
            if (!empty($map['EndUserId'])) {
                $model->endUserId = [];
                $n1 = 0;
                foreach ($map['EndUserId'] as $item1) {
                    $model->endUserId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxDesktopPerUser'])) {
            $model->maxDesktopPerUser = $map['MaxDesktopPerUser'];
        }

        if (isset($map['MaxUserPerDesktop'])) {
            $model->maxUserPerDesktop = $map['MaxUserPerDesktop'];
        }

        if (isset($map['Preview'])) {
            $model->preview = $map['Preview'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }

        return $model;
    }
}
