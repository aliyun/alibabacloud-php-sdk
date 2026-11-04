<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;

class DetachCcnInstanceFromCenShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $ccnId;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $regionBindingListShrink;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'ccnId' => 'CcnId',
        'cenId' => 'CenId',
        'regionBindingListShrink' => 'RegionBindingList',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ccnId) {
            $res['CcnId'] = $this->ccnId;
        }

        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }

        if (null !== $this->regionBindingListShrink) {
            $res['RegionBindingList'] = $this->regionBindingListShrink;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['CcnId'])) {
            $model->ccnId = $map['CcnId'];
        }

        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }

        if (isset($map['RegionBindingList'])) {
            $model->regionBindingListShrink = $map['RegionBindingList'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
