<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageSharePermissionResponseBody\accounts;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageSharePermissionResponseBody\shareGroups;

class DescribeImageSharePermissionResponseBody extends Model
{
    /**
     * @var accounts
     */
    public $accounts;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var shareGroups
     */
    public $shareGroups;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'accounts' => 'Accounts',
        'imageId' => 'ImageId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
        'shareGroups' => 'ShareGroups',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (null !== $this->accounts) {
            $this->accounts->validate();
        }
        if (null !== $this->shareGroups) {
            $this->shareGroups->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accounts) {
            $res['Accounts'] = null !== $this->accounts ? $this->accounts->toArray($noStream) : $this->accounts;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
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

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->shareGroups) {
            $res['ShareGroups'] = null !== $this->shareGroups ? $this->shareGroups->toArray($noStream) : $this->shareGroups;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['Accounts'])) {
            $model->accounts = accounts::fromMap($map['Accounts']);
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ShareGroups'])) {
            $model->shareGroups = shareGroups::fromMap($map['ShareGroups']);
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
