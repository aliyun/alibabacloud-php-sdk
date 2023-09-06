<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventRequest;

use AlibabaCloud\Tea\Model;

class uiConfigs extends Model
{
    /**
     * @example "updateEventButton"
     *
     * @var string
     */
    public $uiName;

    /**
     * @example "hide"
     *
     * @var string
     */
    public $uiStatus;
    protected $_name = [
        'uiName'   => 'uiName',
        'uiStatus' => 'uiStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return uiConfigs
     */
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
