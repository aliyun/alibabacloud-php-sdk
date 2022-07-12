<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\SDK\Sls\V20201230\Models\BatchUpdateEtlMetaRequest\etlMetaList;
use AlibabaCloud\Tea\Model;

class BatchUpdateEtlMetaRequest extends Model
{
    /**
     * @var etlMetaList
     */
    public $etlMetaList;
    protected $_name = [
        'etlMetaList' => 'etlMetaList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->etlMetaList) {
            $res['etlMetaList'] = null !== $this->etlMetaList ? $this->etlMetaList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchUpdateEtlMetaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['etlMetaList'])) {
            $model->etlMetaList = etlMetaList::fromMap($map['etlMetaList']);
        }

        return $model;
    }
}
