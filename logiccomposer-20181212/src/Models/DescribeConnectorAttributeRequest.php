<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Logiccomposer\V20181212\Models;

use AlibabaCloud\Tea\Model;

class DescribeConnectorAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $connectorName;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $stepInfo;
    protected $_name = [
        'connectorName' => 'ConnectorName',
        'lang'          => 'Lang',
        'stepInfo'      => 'StepInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectorName) {
            $res['ConnectorName'] = $this->connectorName;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->stepInfo) {
            $res['StepInfo'] = $this->stepInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeConnectorAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectorName'])) {
            $model->connectorName = $map['ConnectorName'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['StepInfo'])) {
            $model->stepInfo = $map['StepInfo'];
        }

        return $model;
    }
}
