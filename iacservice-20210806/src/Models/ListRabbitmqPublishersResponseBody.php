<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\SDK\IaCService\V20210806\Models\ListRabbitmqPublishersResponseBody\authorizations;
use AlibabaCloud\Tea\Model;

class ListRabbitmqPublishersResponseBody extends Model
{
    /**
     * @var authorizations[]
     */
    public $authorizations;

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
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'authorizations' => 'authorizations',
        'pageNumber'     => 'pageNumber',
        'pageSize'       => 'pageSize',
        'requestId'      => 'requestId',
        'totalCount'     => 'totalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizations) {
            $res['authorizations'] = [];
            if (null !== $this->authorizations && \is_array($this->authorizations)) {
                $n = 0;
                foreach ($this->authorizations as $item) {
                    $res['authorizations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRabbitmqPublishersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['authorizations'])) {
            if (!empty($map['authorizations'])) {
                $model->authorizations = [];
                $n                     = 0;
                foreach ($map['authorizations'] as $item) {
                    $model->authorizations[$n++] = null !== $item ? authorizations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
