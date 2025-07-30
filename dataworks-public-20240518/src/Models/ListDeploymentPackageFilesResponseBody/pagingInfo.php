<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDeploymentPackageFilesResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDeploymentPackageFilesResponseBody\pagingInfo\deploymentPackageFiles;
use AlibabaCloud\Tea\Model;

class pagingInfo extends Model
{
    /**
     * @description The list of files pending deployment.
     *
     * @var deploymentPackageFiles[]
     */
    public $deploymentPackageFiles;

    /**
     * @description The page number. Pages start from page 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of entries returned.
     *
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'deploymentPackageFiles' => 'DeploymentPackageFiles',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->deploymentPackageFiles) {
            $res['DeploymentPackageFiles'] = [];
            if (null !== $this->deploymentPackageFiles && \is_array($this->deploymentPackageFiles)) {
                $n = 0;
                foreach ($this->deploymentPackageFiles as $item) {
                    $res['DeploymentPackageFiles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pagingInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeploymentPackageFiles'])) {
            if (!empty($map['DeploymentPackageFiles'])) {
                $model->deploymentPackageFiles = [];
                $n = 0;
                foreach ($map['DeploymentPackageFiles'] as $item) {
                    $model->deploymentPackageFiles[$n++] = null !== $item ? deploymentPackageFiles::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
