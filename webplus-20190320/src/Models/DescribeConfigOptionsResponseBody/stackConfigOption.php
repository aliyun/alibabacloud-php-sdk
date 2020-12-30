<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeConfigOptionsResponseBody;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeConfigOptionsResponseBody\stackConfigOption\configOptions;
use AlibabaCloud\Tea\Model;

class stackConfigOption extends Model
{
    /**
     * @var string
     */
    public $stackId;

    /**
     * @var configOptions
     */
    public $configOptions;

    /**
     * @var string
     */
    public $stackName;
    protected $_name = [
        'stackId'       => 'StackId',
        'configOptions' => 'ConfigOptions',
        'stackName'     => 'StackName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->configOptions) {
            $res['ConfigOptions'] = null !== $this->configOptions ? $this->configOptions->toMap() : null;
        }
        if (null !== $this->stackName) {
            $res['StackName'] = $this->stackName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stackConfigOption
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['ConfigOptions'])) {
            $model->configOptions = configOptions::fromMap($map['ConfigOptions']);
        }
        if (isset($map['StackName'])) {
            $model->stackName = $map['StackName'];
        }

        return $model;
    }
}
