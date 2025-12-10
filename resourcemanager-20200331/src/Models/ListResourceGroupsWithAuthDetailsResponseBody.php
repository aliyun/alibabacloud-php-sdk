<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListResourceGroupsWithAuthDetailsResponseBody\authDetails;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListResourceGroupsWithAuthDetailsResponseBody\resourceGroups;

class ListResourceGroupsWithAuthDetailsResponseBody extends Model
{
    /**
     * @var authDetails[]
     */
    public $authDetails;

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
    public $requestId;

    /**
     * @var resourceGroups[]
     */
    public $resourceGroups;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'authDetails' => 'AuthDetails',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'resourceGroups' => 'ResourceGroups',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->authDetails)) {
            Model::validateArray($this->authDetails);
        }
        if (\is_array($this->resourceGroups)) {
            Model::validateArray($this->resourceGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authDetails) {
            if (\is_array($this->authDetails)) {
                $res['AuthDetails'] = [];
                $n1 = 0;
                foreach ($this->authDetails as $item1) {
                    $res['AuthDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->resourceGroups) {
            if (\is_array($this->resourceGroups)) {
                $res['ResourceGroups'] = [];
                $n1 = 0;
                foreach ($this->resourceGroups as $item1) {
                    $res['ResourceGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AuthDetails'])) {
            if (!empty($map['AuthDetails'])) {
                $model->authDetails = [];
                $n1 = 0;
                foreach ($map['AuthDetails'] as $item1) {
                    $model->authDetails[$n1] = authDetails::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['ResourceGroups'])) {
            if (!empty($map['ResourceGroups'])) {
                $model->resourceGroups = [];
                $n1 = 0;
                foreach ($map['ResourceGroups'] as $item1) {
                    $model->resourceGroups[$n1] = resourceGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
