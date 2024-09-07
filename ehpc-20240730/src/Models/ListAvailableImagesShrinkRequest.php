<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Tea\Model;

class ListAvailableImagesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $directoryServiceShrink;

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
     * @var string
     */
    public $schedulerShrink;
    protected $_name = [
        'directoryServiceShrink' => 'DirectoryService',
        'enableHT'               => 'EnableHT',
        'HPCInterConnect'        => 'HPCInterConnect',
        'imageOwnerAlias'        => 'ImageOwnerAlias',
        'instanceType'           => 'InstanceType',
        'isPublic'               => 'IsPublic',
        'pageNumber'             => 'PageNumber',
        'pageSize'               => 'PageSize',
        'schedulerShrink'        => 'Scheduler',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directoryServiceShrink) {
            $res['DirectoryService'] = $this->directoryServiceShrink;
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
        if (null !== $this->schedulerShrink) {
            $res['Scheduler'] = $this->schedulerShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAvailableImagesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirectoryService'])) {
            $model->directoryServiceShrink = $map['DirectoryService'];
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
            $model->schedulerShrink = $map['Scheduler'];
        }

        return $model;
    }
}
