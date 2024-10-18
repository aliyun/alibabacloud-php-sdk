<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Tea\Model;

class ListAvailableImagesShrinkRequest extends Model
{
    /**
     * @description The information about the domain account service.
     *
     * @var string
     */
    public $directoryServiceShrink;

    /**
     * @description Specifies whether to return images in which hyper-threading is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enableHT;

    /**
     * @description The network type of the images that you want to query.
     *
     * @example vpc
     *
     * @var string
     */
    public $HPCInterConnect;

    /**
     * @description The image source. Valid values:
     *
     *   system: system images
     *   self: custom images
     *   others: shared images
     *
     * @example self
     *
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @description The instance type for which you want to query available images. If you do not specify the instance type, all available images are returned, regardless of the supported instance types.
     *
     * @example ecs.c7.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description Specifies whether to return published community images. Valid values:
     *
     *   true: returns published community images. If you set the value of this parameter to true, the ImageOwnerAlias parameter must be set to others.
     *   false: returns non-community images. The value of the ImageOwnerAlias parameter prevails.
     *
     * Default value: false.
     * @example true
     *
     * @var bool
     */
    public $isPublic;

    /**
     * @description The page number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values: 1 to 50. Default value: 10.
     *
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The scheduler information about the images that you want to query.
     *
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
