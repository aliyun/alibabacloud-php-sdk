<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListDatasetsResponseBody;

use AlibabaCloud\Tea\Model;

class thirdSearchConfig extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $datasetQuota;

    /**
     * @example 1
     *
     * @var int
     */
    public $datasetUsedQuota;
    protected $_name = [
        'datasetQuota' => 'DatasetQuota',
        'datasetUsedQuota' => 'DatasetUsedQuota',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetQuota) {
            $res['DatasetQuota'] = $this->datasetQuota;
        }
        if (null !== $this->datasetUsedQuota) {
            $res['DatasetUsedQuota'] = $this->datasetUsedQuota;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return thirdSearchConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetQuota'])) {
            $model->datasetQuota = $map['DatasetQuota'];
        }
        if (isset($map['DatasetUsedQuota'])) {
            $model->datasetUsedQuota = $map['DatasetUsedQuota'];
        }

        return $model;
    }
}
