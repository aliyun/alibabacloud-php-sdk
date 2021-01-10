<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\PlayerAuthResponseBody\switchList;

use AlibabaCloud\Tea\Model;

class switch_ extends Model
{
    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $functionId;

    /**
     * @var string
     */
    public $switchId;

    /**
     * @var string
     */
    public $functionName;
    protected $_name = [
        'state'        => 'State',
        'functionId'   => 'FunctionId',
        'switchId'     => 'SwitchId',
        'functionName' => 'FunctionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->functionId) {
            $res['FunctionId'] = $this->functionId;
        }
        if (null !== $this->switchId) {
            $res['SwitchId'] = $this->switchId;
        }
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return switch
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['FunctionId'])) {
            $model->functionId = $map['FunctionId'];
        }
        if (isset($map['SwitchId'])) {
            $model->switchId = $map['SwitchId'];
        }
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }

        return $model;
    }
}
