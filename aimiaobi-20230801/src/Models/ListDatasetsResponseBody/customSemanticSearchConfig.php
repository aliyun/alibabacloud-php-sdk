<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListDatasetsResponseBody;

use AlibabaCloud\Tea\Model;

class customSemanticSearchConfig extends Model
{
    /**
     * @example 3
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

    /**
     * @example 1000
     *
     * @var int
     */
    public $docQuota;

    /**
     * @example 1
     *
     * @var int
     */
    public $docUsedQuota;
    protected $_name = [
        'datasetQuota' => 'DatasetQuota',
        'datasetUsedQuota' => 'DatasetUsedQuota',
        'docQuota' => 'DocQuota',
        'docUsedQuota' => 'DocUsedQuota',
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
        if (null !== $this->docQuota) {
            $res['DocQuota'] = $this->docQuota;
        }
        if (null !== $this->docUsedQuota) {
            $res['DocUsedQuota'] = $this->docUsedQuota;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customSemanticSearchConfig
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
        if (isset($map['DocQuota'])) {
            $model->docQuota = $map['DocQuota'];
        }
        if (isset($map['DocUsedQuota'])) {
            $model->docUsedQuota = $map['DocUsedQuota'];
        }

        return $model;
    }
}
