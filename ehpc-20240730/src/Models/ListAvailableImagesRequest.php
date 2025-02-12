<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListAvailableImagesRequest\directoryService;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListAvailableImagesRequest\scheduler;

class ListAvailableImagesRequest extends Model
{
    /**
     * @var directoryService
     */
    public $directoryService;
    /**
     * @var bool
     */
    public $enableHT;
    /**
     * @var string
     */
    public $HPCInterConnect;
    /**
     * @var string
     */
    public $imageOwnerAlias;
    /**
     * @var string
     */
    public $instanceType;
    /**
     * @var bool
     */
    public $isPublic;
    /**
     * @var int
     */
    public $pageNumber;
    /**
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
        if (null !== $this->directoryService) {
            $res['DirectoryService'] = null !== $this->directoryService ? $this->directoryService->toArray($noStream) : $this->directoryService;
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
