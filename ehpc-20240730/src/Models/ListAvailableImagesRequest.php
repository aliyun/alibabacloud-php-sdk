<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\SDK\EHPC\V20240730\Models\ListAvailableImagesRequest\directoryService;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListAvailableImagesRequest\scheduler;
use AlibabaCloud\Tea\Model;

class ListAvailableImagesRequest extends Model
{
    /**
     * @description The information about the domain account service.
     *
     * @var directoryService
     */
    public $directoryService;

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
     *   system: system image.
     *   self: custom image.
     *   others: shared image.
     *
     * @example self
     *
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @description The instance type.
     *
     * >  By default, if you do not specify an instance type, the list of images that are supported by all instance types are queried. For more information, see [Instance families](https://help.aliyun.com/document_detail/25378.html).
     * @example ecs.c7.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description Specifies whether to return published community images. Valid values:
     *
     *   true: returns published community images. If you set the value of this parameter to `true`, the `ImageOwnerAlias` parameter must be set to `others`.
     *   false: returns non-community images. The value of the `ImageOwnerAlias` parameter prevails.
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
