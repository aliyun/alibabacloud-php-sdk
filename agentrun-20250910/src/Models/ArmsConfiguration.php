<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class ArmsConfiguration extends Model
{
    /**
     * @var string
     */
    public $armsLicenseKey;

    /**
     * @var bool
     */
    public $enableArms;
    protected $_name = [
        'armsLicenseKey' => 'armsLicenseKey',
        'enableArms' => 'enableArms',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->armsLicenseKey) {
            $res['armsLicenseKey'] = $this->armsLicenseKey;
        }

        if (null !== $this->enableArms) {
            $res['enableArms'] = $this->enableArms;
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
        if (isset($map['armsLicenseKey'])) {
            $model->armsLicenseKey = $map['armsLicenseKey'];
        }

        if (isset($map['enableArms'])) {
            $model->enableArms = $map['enableArms'];
        }

        return $model;
    }
}
