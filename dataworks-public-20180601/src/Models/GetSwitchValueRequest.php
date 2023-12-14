<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20180601\Models;

use AlibabaCloud\Tea\Model;

class GetSwitchValueRequest extends Model
{
    /**
     * @var string
     */
    public $switchName;
    protected $_name = [
        'switchName' => 'SwitchName',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSwitchValueRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SwitchName'])) {
            $model->switchName = $map['SwitchName'];
        }

        return $model;
    }
}
