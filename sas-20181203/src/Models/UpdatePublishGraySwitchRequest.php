<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class UpdatePublishGraySwitchRequest extends Model
{
    /**
     * @var int
     */
    public $graySwitchStatus;
    protected $_name = [
        'graySwitchStatus' => 'GraySwitchStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->graySwitchStatus) {
            $res['GraySwitchStatus'] = $this->graySwitchStatus;
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
        if (isset($map['GraySwitchStatus'])) {
            $model->graySwitchStatus = $map['GraySwitchStatus'];
        }

        return $model;
    }
}
