<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponseBody\launchTemplateVersionSets;
use AlibabaCloud\Tea\Model;

class DescribeLaunchTemplateVersionsResponseBody extends Model
{
    /**
     * @description Details of the launch template versions.
     *
     * @var launchTemplateVersionSets
     */
    public $launchTemplateVersionSets;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example 3989ED0C-20A1-4351-A127-2067FF8390AX
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of launch templates.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'launchTemplateVersionSets' => 'LaunchTemplateVersionSets',
        'pageNumber'                => 'PageNumber',
        'pageSize'                  => 'PageSize',
        'requestId'                 => 'RequestId',
        'totalCount'                => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->launchTemplateVersionSets) {
            $res['LaunchTemplateVersionSets'] = null !== $this->launchTemplateVersionSets ? $this->launchTemplateVersionSets->toMap() : null;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLaunchTemplateVersionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LaunchTemplateVersionSets'])) {
            $model->launchTemplateVersionSets = launchTemplateVersionSets::fromMap($map['LaunchTemplateVersionSets']);
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
