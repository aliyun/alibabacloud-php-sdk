<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponseBody\launchTemplateVersionSets;
use AlibabaCloud\Tea\Model;

class DescribeLaunchTemplateVersionsResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var launchTemplateVersionSets
     */
    public $launchTemplateVersionSets;
    protected $_name = [
        'totalCount'                => 'TotalCount',
        'pageSize'                  => 'PageSize',
        'requestId'                 => 'RequestId',
        'pageNumber'                => 'PageNumber',
        'launchTemplateVersionSets' => 'LaunchTemplateVersionSets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->launchTemplateVersionSets) {
            $res['LaunchTemplateVersionSets'] = null !== $this->launchTemplateVersionSets ? $this->launchTemplateVersionSets->toMap() : null;
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['LaunchTemplateVersionSets'])) {
            $model->launchTemplateVersionSets = launchTemplateVersionSets::fromMap($map['LaunchTemplateVersionSets']);
        }

        return $model;
    }
}
