<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;

class AttachCcnInstanceToCenRequest extends Model
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
    public $regionId;

    /**
     * @var string
     */
    public $subnet;
    protected $_name = [
        'ccnId' => 'CcnId',
        'cenId' => 'CenId',
        'regionId' => 'RegionId',
        'subnet' => 'Subnet',
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

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->subnet) {
            $res['Subnet'] = $this->subnet;
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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Subnet'])) {
            $model->subnet = $map['Subnet'];
        }

        return $model;
    }
}
