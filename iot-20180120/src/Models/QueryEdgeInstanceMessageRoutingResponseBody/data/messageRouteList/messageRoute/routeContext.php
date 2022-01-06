<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceMessageRoutingResponseBody\data\messageRouteList\messageRoute;

use AlibabaCloud\Tea\Model;

class routeContext extends Model
{
    /**
     * @var string
     */
    public $qos;

    /**
     * @var string
     */
    public $sourceApplicationName;

    /**
     * @var string
     */
    public $sourceFcFunctionName;

    /**
     * @var string
     */
    public $sourceFcServiceName;

    /**
     * @var string
     */
    public $targetApplicationName;

    /**
     * @var string
     */
    public $targetFcFunctionName;

    /**
     * @var string
     */
    public $targetFcServiceName;
    protected $_name = [
        'qos'                   => 'Qos',
        'sourceApplicationName' => 'SourceApplicationName',
        'sourceFcFunctionName'  => 'SourceFcFunctionName',
        'sourceFcServiceName'   => 'SourceFcServiceName',
        'targetApplicationName' => 'TargetApplicationName',
        'targetFcFunctionName'  => 'TargetFcFunctionName',
        'targetFcServiceName'   => 'TargetFcServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qos) {
            $res['Qos'] = $this->qos;
        }
        if (null !== $this->sourceApplicationName) {
            $res['SourceApplicationName'] = $this->sourceApplicationName;
        }
        if (null !== $this->sourceFcFunctionName) {
            $res['SourceFcFunctionName'] = $this->sourceFcFunctionName;
        }
        if (null !== $this->sourceFcServiceName) {
            $res['SourceFcServiceName'] = $this->sourceFcServiceName;
        }
        if (null !== $this->targetApplicationName) {
            $res['TargetApplicationName'] = $this->targetApplicationName;
        }
        if (null !== $this->targetFcFunctionName) {
            $res['TargetFcFunctionName'] = $this->targetFcFunctionName;
        }
        if (null !== $this->targetFcServiceName) {
            $res['TargetFcServiceName'] = $this->targetFcServiceName;
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
        if (isset($map['Qos'])) {
            $model->qos = $map['Qos'];
        }
        if (isset($map['SourceApplicationName'])) {
            $model->sourceApplicationName = $map['SourceApplicationName'];
        }
        if (isset($map['SourceFcFunctionName'])) {
            $model->sourceFcFunctionName = $map['SourceFcFunctionName'];
        }
        if (isset($map['SourceFcServiceName'])) {
            $model->sourceFcServiceName = $map['SourceFcServiceName'];
        }
        if (isset($map['TargetApplicationName'])) {
            $model->targetApplicationName = $map['TargetApplicationName'];
        }
        if (isset($map['TargetFcFunctionName'])) {
            $model->targetFcFunctionName = $map['TargetFcFunctionName'];
        }
        if (isset($map['TargetFcServiceName'])) {
            $model->targetFcServiceName = $map['TargetFcServiceName'];
        }

        return $model;
    }
}
