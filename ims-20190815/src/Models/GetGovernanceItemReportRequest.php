<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class GetGovernanceItemReportRequest extends Model
{
    /**
     * @example SSOLoginEnabled
     *
     * @var string
     */
    public $governanceItemType;

    /**
     * @example EXAMPLE
     *
     * @var string
     */
    public $marker;

    /**
     * @example 1000
     *
     * @var string
     */
    public $maxItems;
    protected $_name = [
        'governanceItemType' => 'GovernanceItemType',
        'marker'             => 'Marker',
        'maxItems'           => 'MaxItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->governanceItemType) {
            $res['GovernanceItemType'] = $this->governanceItemType;
        }
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }
        if (null !== $this->maxItems) {
            $res['MaxItems'] = $this->maxItems;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetGovernanceItemReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GovernanceItemType'])) {
            $model->governanceItemType = $map['GovernanceItemType'];
        }
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }
        if (isset($map['MaxItems'])) {
            $model->maxItems = $map['MaxItems'];
        }

        return $model;
    }
}
