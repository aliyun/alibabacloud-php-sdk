<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models;

use AlibabaCloud\Dara\Model;

class InitSasModuleRuleShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $autoBind;

    /**
     * @var string
     */
    public $instancesShrink;

    /**
     * @var bool
     */
    public $isTrial;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'autoBind' => 'AutoBind',
        'instancesShrink' => 'Instances',
        'isTrial' => 'IsTrial',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoBind) {
            $res['AutoBind'] = $this->autoBind;
        }

        if (null !== $this->instancesShrink) {
            $res['Instances'] = $this->instancesShrink;
        }

        if (null !== $this->isTrial) {
            $res['IsTrial'] = $this->isTrial;
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
        if (isset($map['AutoBind'])) {
            $model->autoBind = $map['AutoBind'];
        }

        if (isset($map['Instances'])) {
            $model->instancesShrink = $map['Instances'];
        }

        if (isset($map['IsTrial'])) {
            $model->isTrial = $map['IsTrial'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
