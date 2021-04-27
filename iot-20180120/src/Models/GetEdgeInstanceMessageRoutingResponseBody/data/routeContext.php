<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetEdgeInstanceMessageRoutingResponseBody\data;

use AlibabaCloud\Tea\Model;

class routeContext extends Model
{
    /**
     * @var string
     */
    public $sourceFcServiceName;

    /**
     * @var string
     */
    public $sourceFcFunctionName;

    /**
     * @var string
     */
    public $sourceApplicationName;

    /**
     * @var string
     */
    public $targetFcServiceName;

    /**
     * @var string
     */
    public $targetFcFunctionName;

    /**
     * @var string
     */
    public $targetApplicationName;

    /**
     * @var string
     */
    public $qos;
    protected $_name = [
        'sourceFcServiceName'   => 'SourceFcServiceName',
        'sourceFcFunctionName'  => 'SourceFcFunctionName',
        'sourceApplicationName' => 'SourceApplicationName',
        'targetFcServiceName'   => 'TargetFcServiceName',
        'targetFcFunctionName'  => 'TargetFcFunctionName',
        'targetApplicationName' => 'TargetApplicationName',
        'qos'                   => 'Qos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceFcServiceName) {
            $res['SourceFcServiceName'] = $this->sourceFcServiceName;
        }
        if (null !== $this->sourceFcFunctionName) {
            $res['SourceFcFunctionName'] = $this->sourceFcFunctionName;
        }
        if (null !== $this->sourceApplicationName) {
            $res['SourceApplicationName'] = $this->sourceApplicationName;
        }
        if (null !== $this->targetFcServiceName) {
            $res['TargetFcServiceName'] = $this->targetFcServiceName;
        }
        if (null !== $this->targetFcFunctionName) {
            $res['TargetFcFunctionName'] = $this->targetFcFunctionName;
        }
        if (null !== $this->targetApplicationName) {
            $res['TargetApplicationName'] = $this->targetApplicationName;
        }
        if (null !== $this->qos) {
            $res['Qos'] = $this->qos;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeContext
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceFcServiceName'])) {
            $model->sourceFcServiceName = $map['SourceFcServiceName'];
        }
        if (isset($map['SourceFcFunctionName'])) {
            $model->sourceFcFunctionName = $map['SourceFcFunctionName'];
        }
        if (isset($map['SourceApplicationName'])) {
            $model->sourceApplicationName = $map['SourceApplicationName'];
        }
        if (isset($map['TargetFcServiceName'])) {
            $model->targetFcServiceName = $map['TargetFcServiceName'];
        }
        if (isset($map['TargetFcFunctionName'])) {
            $model->targetFcFunctionName = $map['TargetFcFunctionName'];
        }
        if (isset($map['TargetApplicationName'])) {
            $model->targetApplicationName = $map['TargetApplicationName'];
        }
        if (isset($map['Qos'])) {
            $model->qos = $map['Qos'];
        }

        return $model;
    }
}
