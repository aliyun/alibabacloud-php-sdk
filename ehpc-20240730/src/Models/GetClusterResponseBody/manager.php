<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\GetClusterResponseBody;

use AlibabaCloud\SDK\EHPC\V20240730\Models\GetClusterResponseBody\manager\directoryService;
use AlibabaCloud\SDK\EHPC\V20240730\Models\GetClusterResponseBody\manager\DNS;
use AlibabaCloud\SDK\EHPC\V20240730\Models\GetClusterResponseBody\manager\managerNode;
use AlibabaCloud\SDK\EHPC\V20240730\Models\GetClusterResponseBody\manager\scheduler;
use AlibabaCloud\Tea\Model;

class manager extends Model
{
    /**
     * @description The configurations of the domain name resolution service.
     *
     * @var DNS
     */
    public $DNS;

    /**
     * @description The information about the domain account service.
     *
     * @var directoryService
     */
    public $directoryService;

    /**
     * @description The configurations of the management node.
     *
     * @var managerNode
     */
    public $managerNode;

    /**
     * @description The information about the scheduler.
     *
     * @var scheduler
     */
    public $scheduler;
    protected $_name = [
        'DNS'              => 'DNS',
        'directoryService' => 'DirectoryService',
        'managerNode'      => 'ManagerNode',
        'scheduler'        => 'Scheduler',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DNS) {
            $res['DNS'] = null !== $this->DNS ? $this->DNS->toMap() : null;
        }
        if (null !== $this->directoryService) {
            $res['DirectoryService'] = null !== $this->directoryService ? $this->directoryService->toMap() : null;
        }
        if (null !== $this->managerNode) {
            $res['ManagerNode'] = null !== $this->managerNode ? $this->managerNode->toMap() : null;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = null !== $this->scheduler ? $this->scheduler->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return manager
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DNS'])) {
            $model->DNS = DNS::fromMap($map['DNS']);
        }
        if (isset($map['DirectoryService'])) {
            $model->directoryService = directoryService::fromMap($map['DirectoryService']);
        }
        if (isset($map['ManagerNode'])) {
            $model->managerNode = managerNode::fromMap($map['ManagerNode']);
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = scheduler::fromMap($map['Scheduler']);
        }

        return $model;
    }
}
