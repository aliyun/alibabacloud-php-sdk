<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class ModifySlsDispatchStatusRequest extends Model
{
    /**
     * @var string
     */
    public $dispatchValue;

    /**
     * @var bool
     */
    public $enableStatus;

    /**
     * @var string
     */
    public $filterKeys;

    /**
     * @var string
     */
    public $newRegionId;

    /**
     * @var string
     */
    public $site;
    protected $_name = [
        'dispatchValue' => 'DispatchValue',
        'enableStatus' => 'EnableStatus',
        'filterKeys' => 'FilterKeys',
        'newRegionId' => 'NewRegionId',
        'site' => 'Site',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dispatchValue) {
            $res['DispatchValue'] = $this->dispatchValue;
        }

        if (null !== $this->enableStatus) {
            $res['EnableStatus'] = $this->enableStatus;
        }

        if (null !== $this->filterKeys) {
            $res['FilterKeys'] = $this->filterKeys;
        }

        if (null !== $this->newRegionId) {
            $res['NewRegionId'] = $this->newRegionId;
        }

        if (null !== $this->site) {
            $res['Site'] = $this->site;
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
        if (isset($map['DispatchValue'])) {
            $model->dispatchValue = $map['DispatchValue'];
        }

        if (isset($map['EnableStatus'])) {
            $model->enableStatus = $map['EnableStatus'];
        }

        if (isset($map['FilterKeys'])) {
            $model->filterKeys = $map['FilterKeys'];
        }

        if (isset($map['NewRegionId'])) {
            $model->newRegionId = $map['NewRegionId'];
        }

        if (isset($map['Site'])) {
            $model->site = $map['Site'];
        }

        return $model;
    }
}
