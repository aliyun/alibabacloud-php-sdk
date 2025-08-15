<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListDatasetsResponseBody;

use AlibabaCloud\Dara\Model;

class thirdSearchConfig extends Model
{
    /**
     * @var int
     */
    public $datasetQuota;

    /**
     * @var int
     */
    public $datasetUsedQuota;
    protected $_name = [
        'datasetQuota' => 'DatasetQuota',
        'datasetUsedQuota' => 'DatasetUsedQuota',
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

        return $model;
    }
}
