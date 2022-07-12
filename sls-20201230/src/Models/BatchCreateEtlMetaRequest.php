<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\SDK\Sls\V20201230\Models\BatchCreateEtlMetaRequest\etlMetaList;
use AlibabaCloud\Tea\Model;

class BatchCreateEtlMetaRequest extends Model
{
    /**
     * @var etlMetaList[]
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
            $res['etlMetaList'] = [];
            if (null !== $this->etlMetaList && \is_array($this->etlMetaList)) {
                $n = 0;
                foreach ($this->etlMetaList as $item) {
                    $res['etlMetaList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchCreateEtlMetaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['etlMetaList'])) {
            if (!empty($map['etlMetaList'])) {
                $model->etlMetaList = [];
                $n                  = 0;
                foreach ($map['etlMetaList'] as $item) {
                    $model->etlMetaList[$n++] = null !== $item ? etlMetaList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
