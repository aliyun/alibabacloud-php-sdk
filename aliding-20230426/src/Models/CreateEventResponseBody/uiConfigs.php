<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventResponseBody;

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
        'uiName' => 'UiName',
        'uiStatus' => 'UiStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->uiName) {
            $res['UiName'] = $this->uiName;
        }

        if (null !== $this->uiStatus) {
            $res['UiStatus'] = $this->uiStatus;
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
        if (isset($map['UiName'])) {
            $model->uiName = $map['UiName'];
        }

        if (isset($map['UiStatus'])) {
            $model->uiStatus = $map['UiStatus'];
        }

        return $model;
    }
}
