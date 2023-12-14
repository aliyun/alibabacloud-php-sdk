<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20180601\Models;

use AlibabaCloud\Tea\Model;

class SetSwitchValueRequest extends Model
{
    /**
     * @var string
     */
    public $switchName;

    /**
     * @var string
     */
    public $switchValue;
    protected $_name = [
        'switchName'  => 'SwitchName',
        'switchValue' => 'SwitchValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->switchName) {
            $res['SwitchName'] = $this->switchName;
        }
        if (null !== $this->switchValue) {
            $res['SwitchValue'] = $this->switchValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetSwitchValueRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SwitchName'])) {
            $model->switchName = $map['SwitchName'];
        }
        if (isset($map['SwitchValue'])) {
            $model->switchValue = $map['SwitchValue'];
        }

        return $model;
    }
}
