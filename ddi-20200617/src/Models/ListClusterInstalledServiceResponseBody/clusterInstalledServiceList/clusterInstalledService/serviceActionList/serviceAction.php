<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterInstalledServiceResponseBody\clusterInstalledServiceList\clusterInstalledService\serviceActionList;

use AlibabaCloud\Tea\Model;

class serviceAction extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $actionName;

    /**
     * @var string
     */
    public $componentName;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $command;
    protected $_name = [
        'displayName'   => 'DisplayName',
        'actionName'    => 'ActionName',
        'componentName' => 'ComponentName',
        'serviceName'   => 'ServiceName',
        'command'       => 'Command',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->actionName) {
            $res['ActionName'] = $this->actionName;
        }
        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
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
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['ActionName'])) {
            $model->actionName = $map['ActionName'];
        }
        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }

        return $model;
    }
}
