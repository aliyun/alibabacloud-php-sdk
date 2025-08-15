<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetGovernanceMetricsResponseBody\data;

use AlibabaCloud\Dara\Model;

class governanceMetrics extends Model
{
    /**
     * @var string
     */
    public $columnsSchema;

    /**
     * @var string
     */
    public $governanceItem;

    /**
     * @var string
     */
    public $governanceScore;
    protected $_name = [
        'columnsSchema' => 'ColumnsSchema',
        'governanceItem' => 'GovernanceItem',
        'governanceScore' => 'GovernanceScore',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnsSchema) {
            $res['ColumnsSchema'] = $this->columnsSchema;
        }

        if (null !== $this->governanceItem) {
            $res['GovernanceItem'] = $this->governanceItem;
        }

        if (null !== $this->governanceScore) {
            $res['GovernanceScore'] = $this->governanceScore;
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
        if (isset($map['ColumnsSchema'])) {
            $model->columnsSchema = $map['ColumnsSchema'];
        }

        if (isset($map['GovernanceItem'])) {
            $model->governanceItem = $map['GovernanceItem'];
        }

        if (isset($map['GovernanceScore'])) {
            $model->governanceScore = $map['GovernanceScore'];
        }

        return $model;
    }
}
