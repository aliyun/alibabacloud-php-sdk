<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListDatasetsResponseBody;

use AlibabaCloud\Dara\Model;

class customSemanticSearchConfig extends Model
{
    /**
     * @var int
     */
    public $datasetQuota;

    /**
     * @var int
     */
    public $datasetUsedQuota;

    /**
     * @var int
     */
    public $docQuota;

    /**
     * @var int
     */
    public $docUsedQuota;
    protected $_name = [
        'datasetQuota' => 'DatasetQuota',
        'datasetUsedQuota' => 'DatasetUsedQuota',
        'docQuota' => 'DocQuota',
        'docUsedQuota' => 'DocUsedQuota',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
