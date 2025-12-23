<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\PatchEventRequest;

use AlibabaCloud\Dara\Model;

class uiConfigs extends Model
{
    /**
     * @var string
     */
    public $uiName;

    /**
     * @var string
     */
    public $uiStatus;
    protected $_name = [
        'uiName' => 'uiName',
        'uiStatus' => 'uiStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->uiName) {
            $res['uiName'] = $this->uiName;
        }

        if (null !== $this->uiStatus) {
            $res['uiStatus'] = $this->uiStatus;
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
        if (isset($map['uiName'])) {
            $model->uiName = $map['uiName'];
        }

        if (isset($map['uiStatus'])) {
            $model->uiStatus = $map['uiStatus'];
        }

        return $model;
    }
}
