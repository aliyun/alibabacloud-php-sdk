<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Tea\Model;

class ListAddonTemplatesRequest extends Model
{
    /**
     * @description The addon names.
     *
     * @var string[]
     */
    public $addonNames;

    /**
     * @description The cluster type. Valid values:
     *
     *   Standard
     *   Serverless
     *
     * @example Standard
     *
     * @var string
     */
    public $clusterCategory;

    /**
     * @description The page number of the page to return. Pages start from page 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 20.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'addonNames'      => 'AddonNames',
        'clusterCategory' => 'ClusterCategory',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addonNames) {
            $res['AddonNames'] = $this->addonNames;
        }
        if (null !== $this->clusterCategory) {
            $res['ClusterCategory'] = $this->clusterCategory;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAddonTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddonNames'])) {
            if (!empty($map['AddonNames'])) {
                $model->addonNames = $map['AddonNames'];
            }
        }
        if (isset($map['ClusterCategory'])) {
            $model->clusterCategory = $map['ClusterCategory'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
