<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetEtlMetaResponseBody extends Model
{
    /**
     * @var EtlMeta[]
     */
    public $etlMetaList;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'etlMetaList' => 'etlMetaList',
        'total'       => 'total',
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
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEtlMetaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['etlMetaList'])) {
            if (!empty($map['etlMetaList'])) {
                $model->etlMetaList = [];
                $n                  = 0;
                foreach ($map['etlMetaList'] as $item) {
                    $model->etlMetaList[$n++] = null !== $item ? EtlMeta::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
