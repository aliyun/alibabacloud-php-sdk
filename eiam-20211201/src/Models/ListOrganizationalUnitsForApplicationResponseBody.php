<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListOrganizationalUnitsForApplicationResponseBody\organizationalUnits;

class ListOrganizationalUnitsForApplicationResponseBody extends Model
{
    /**
     * @var organizationalUnits[]
     */
    public $organizationalUnits;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        if (\is_array($this->organizationalUnits)) {
            Model::validateArray($this->organizationalUnits);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->organizationalUnits) {
            if (\is_array($this->organizationalUnits)) {
                $res['OrganizationalUnits'] = [];
                $n1                         = 0;
                foreach ($this->organizationalUnits as $item1) {
                    $res['OrganizationalUnits'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrganizationalUnits'])) {
            if (!empty($map['OrganizationalUnits'])) {
                $model->organizationalUnits = [];
                $n1                         = 0;
                foreach ($map['OrganizationalUnits'] as $item1) {
                    $model->organizationalUnits[$n1++] = organizationalUnits::fromMap($item1);
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
