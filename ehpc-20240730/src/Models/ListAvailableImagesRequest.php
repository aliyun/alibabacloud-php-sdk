<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\SDK\EHPC\V20240730\Models\ListAvailableImagesRequest\directoryService;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListAvailableImagesRequest\scheduler;
use AlibabaCloud\Tea\Model;

class ListAvailableImagesRequest extends Model
{
    /**
     * @var directoryService
     */
    public $directoryService;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableHT;

    /**
     * @example vpc
     *
     * @var string
     */
    public $HPCInterConnect;

    /**
     * @example self
     *
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @example ecs.c7.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example true
     *
     * @var bool
     */
    public $isPublic;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var scheduler
     */
    public $scheduler;
    protected $_name = [
        'directoryService' => 'DirectoryService',
        'enableHT'         => 'EnableHT',
        'HPCInterConnect'  => 'HPCInterConnect',
        'imageOwnerAlias'  => 'ImageOwnerAlias',
        'instanceType'     => 'InstanceType',
        'isPublic'         => 'IsPublic',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'scheduler'        => 'Scheduler',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directoryService) {
            $res['DirectoryService'] = null !== $this->directoryService ? $this->directoryService->toMap() : null;
        }
        if (null !== $this->enableHT) {
            $res['EnableHT'] = $this->enableHT;
        }
        if (null !== $this->HPCInterConnect) {
            $res['HPCInterConnect'] = $this->HPCInterConnect;
        }
        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->isPublic) {
            $res['IsPublic'] = $this->isPublic;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = null !== $this->scheduler ? $this->scheduler->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAvailableImagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirectoryService'])) {
            $model->directoryService = directoryService::fromMap($map['DirectoryService']);
        }
        if (isset($map['EnableHT'])) {
            $model->enableHT = $map['EnableHT'];
        }
        if (isset($map['HPCInterConnect'])) {
            $model->HPCInterConnect = $map['HPCInterConnect'];
        }
        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['IsPublic'])) {
            $model->isPublic = $map['IsPublic'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = scheduler::fromMap($map['Scheduler']);
        }

        return $model;
    }
}
