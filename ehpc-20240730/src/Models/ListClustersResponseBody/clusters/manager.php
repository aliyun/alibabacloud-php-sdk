<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListClustersResponseBody\clusters;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListClustersResponseBody\clusters\manager\directoryService;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListClustersResponseBody\clusters\manager\DNS;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListClustersResponseBody\clusters\manager\scheduler;

class manager extends Model
{
    /**
     * @var DNS
     */
    public $DNS;
    /**
     * @var directoryService
     */
    public $directoryService;
    /**
     * @var scheduler
     */
    public $scheduler;
    protected $_name = [
        'DNS'              => 'DNS',
        'directoryService' => 'DirectoryService',
        'scheduler'        => 'Scheduler',
    ];

    public function validate()
    {
        if (null !== $this->DNS) {
            $this->DNS->validate();
        }
        if (null !== $this->directoryService) {
            $this->directoryService->validate();
        }
        if (null !== $this->scheduler) {
            $this->scheduler->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DNS) {
            $res['DNS'] = null !== $this->DNS ? $this->DNS->toArray($noStream) : $this->DNS;
        }

        if (null !== $this->directoryService) {
            $res['DirectoryService'] = null !== $this->directoryService ? $this->directoryService->toArray($noStream) : $this->directoryService;
        }

        if (null !== $this->scheduler) {
            $res['Scheduler'] = null !== $this->scheduler ? $this->scheduler->toArray($noStream) : $this->scheduler;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DNS'])) {
            $model->DNS = DNS::fromMap($map['DNS']);
        }

        if (isset($map['DirectoryService'])) {
            $model->directoryService = directoryService::fromMap($map['DirectoryService']);
        }

        if (isset($map['Scheduler'])) {
            $model->scheduler = scheduler::fromMap($map['Scheduler']);
        }

        return $model;
    }
}
