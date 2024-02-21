<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterInstalledServiceResponseBody\clusterInstalledServiceList\clusterInstalledService\serviceActionList;

use AlibabaCloud\Tea\Model;

class serviceAction extends Model
{
    /**
     * @example CUSTOM_COMMAND
     *
     * @var string
     */
    public $actionName;

    /**
     * @example rebalance
     *
     * @var string
     */
    public $command;

    /**
     * @example DataNode
     *
     * @var string
     */
    public $componentName;

    /**
     * @example Start All Components
     *
     * @var string
     */
    public $displayName;

    /**
     * @example HDFS
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'actionName'    => 'ActionName',
        'command'       => 'Command',
        'componentName' => 'ComponentName',
        'displayName'   => 'DisplayName',
        'serviceName'   => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionName) {
            $res['ActionName'] = $this->actionName;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceAction
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionName'])) {
            $model->actionName = $map['ActionName'];
        }
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
