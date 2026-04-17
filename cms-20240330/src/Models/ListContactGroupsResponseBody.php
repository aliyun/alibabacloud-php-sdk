<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListContactGroupsResponseBody\contactGroups;

class ListContactGroupsResponseBody extends Model
{
    /**
     * @var contactGroups[]
     */
    public $contactGroups;

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
    public $total;
    protected $_name = [
        'contactGroups' => 'contactGroups',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'requestId' => 'requestId',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->contactGroups)) {
            Model::validateArray($this->contactGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactGroups) {
            if (\is_array($this->contactGroups)) {
                $res['contactGroups'] = [];
                $n1 = 0;
                foreach ($this->contactGroups as $item1) {
                    $res['contactGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['contactGroups'])) {
            if (!empty($map['contactGroups'])) {
                $model->contactGroups = [];
                $n1 = 0;
                foreach ($map['contactGroups'] as $item1) {
                    $model->contactGroups[$n1] = contactGroups::fromMap($item1);
                    ++$n1;
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

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
