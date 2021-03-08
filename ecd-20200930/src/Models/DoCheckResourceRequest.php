<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DoCheckResourceRequest extends Model
{
    /**
     * @var string
     */
    public $invoker;

    /**
     * @var string
     */
    public $pk;

    /**
     * @var string
     */
    public $bid;

    /**
     * @var int
     */
    public $hid;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $taskIdentifier;

    /**
     * @var string
     */
    public $taskExtraData;

    /**
     * @var string
     */
    public $gmtWakeup;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'invoker'        => 'Invoker',
        'pk'             => 'Pk',
        'bid'            => 'Bid',
        'hid'            => 'Hid',
        'country'        => 'Country',
        'taskIdentifier' => 'TaskIdentifier',
        'taskExtraData'  => 'TaskExtraData',
        'gmtWakeup'      => 'GmtWakeup',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invoker) {
            $res['Invoker'] = $this->invoker;
        }
        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
        }
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }
        if (null !== $this->hid) {
            $res['Hid'] = $this->hid;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->taskIdentifier) {
            $res['TaskIdentifier'] = $this->taskIdentifier;
        }
        if (null !== $this->taskExtraData) {
            $res['TaskExtraData'] = $this->taskExtraData;
        }
        if (null !== $this->gmtWakeup) {
            $res['GmtWakeup'] = $this->gmtWakeup;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DoCheckResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Invoker'])) {
            $model->invoker = $map['Invoker'];
        }
        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['Hid'])) {
            $model->hid = $map['Hid'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['TaskIdentifier'])) {
            $model->taskIdentifier = $map['TaskIdentifier'];
        }
        if (isset($map['TaskExtraData'])) {
            $model->taskExtraData = $map['TaskExtraData'];
        }
        if (isset($map['GmtWakeup'])) {
            $model->gmtWakeup = $map['GmtWakeup'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
