<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventResponseBody;

use AlibabaCloud\Tea\Model;

class uiConfigs extends Model
{
    /**
     * @example updateEventButton
     *
     * @var string
     */
    public $uiName;

    /**
     * @example hide
     *
     * @var string
     */
    public $uiStatus;
    protected $_name = [
        'uiName'   => 'UiName',
        'uiStatus' => 'UiStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return uiConfigs
     */
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
