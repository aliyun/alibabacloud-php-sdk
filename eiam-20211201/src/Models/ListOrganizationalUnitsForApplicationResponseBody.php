<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\ListOrganizationalUnitsForApplicationResponseBody\organizationalUnits;
use AlibabaCloud\Tea\Model;

class ListOrganizationalUnitsForApplicationResponseBody extends Model
{
    /**
     * @description The IDs of the organizations that are allowed to access the application.
     *
     * @var organizationalUnits[]
     */
    public $organizationalUnits;

    /**
     * @description The ID of the request.
     *
     * @example 0441BD79-92F3-53AA-8657-F8CE4A2B912A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of the returned entries.
     *
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'organizationalUnits' => 'OrganizationalUnits',
        'requestId'           => 'RequestId',
        'totalCount'          => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->organizationalUnits) {
            $res['OrganizationalUnits'] = [];
            if (null !== $this->organizationalUnits && \is_array($this->organizationalUnits)) {
                $n = 0;
                foreach ($this->organizationalUnits as $item) {
                    $res['OrganizationalUnits'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return ListOrganizationalUnitsForApplicationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrganizationalUnits'])) {
            if (!empty($map['OrganizationalUnits'])) {
                $model->organizationalUnits = [];
                $n                          = 0;
                foreach ($map['OrganizationalUnits'] as $item) {
                    $model->organizationalUnits[$n++] = null !== $item ? organizationalUnits::fromMap($item) : $item;
                }
            }
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
