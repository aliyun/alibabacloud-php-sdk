<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ModifyPostPayModuleSwitchRequest;

use AlibabaCloud\Dara\Model;

class edrModuleSwitch extends Model
{
    /**
     * @var int
     */
    public $autoBind;

    /**
     * @var int
     */
    public $EDR_HOST_USAGE;
    protected $_name = [
        'autoBind' => 'AutoBind',
        'EDR_HOST_USAGE' => 'EDR_HOST_USAGE',
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

        if (null !== $this->EDR_HOST_USAGE) {
            $res['EDR_HOST_USAGE'] = $this->EDR_HOST_USAGE;
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

        if (isset($map['EDR_HOST_USAGE'])) {
            $model->EDR_HOST_USAGE = $map['EDR_HOST_USAGE'];
        }

        return $model;
    }
}
