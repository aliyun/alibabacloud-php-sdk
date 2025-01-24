<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\SetDesktopGroupScaleTimerRequest\scaleTimerInfos;

class SetDesktopGroupScaleTimerRequest extends Model
{
    /**
     * @var string
     */
    public $desktopGroupId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var scaleTimerInfos[]
     */
    public $scaleTimerInfos;
    protected $_name = [
        'desktopGroupId'  => 'DesktopGroupId',
        'regionId'        => 'RegionId',
        'scaleTimerInfos' => 'ScaleTimerInfos',
    ];

    public function validate()
    {
        if (\is_array($this->scaleTimerInfos)) {
            Model::validateArray($this->scaleTimerInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->scaleTimerInfos) {
            if (\is_array($this->scaleTimerInfos)) {
                $res['ScaleTimerInfos'] = [];
                $n1                     = 0;
                foreach ($this->scaleTimerInfos as $item1) {
                    $res['ScaleTimerInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ScaleTimerInfos'])) {
            if (!empty($map['ScaleTimerInfos'])) {
                $model->scaleTimerInfos = [];
                $n1                     = 0;
                foreach ($map['ScaleTimerInfos'] as $item1) {
                    $model->scaleTimerInfos[$n1++] = scaleTimerInfos::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
