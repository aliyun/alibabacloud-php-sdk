<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeGeneralStructureResponseBody\data\subImages;

use AlibabaCloud\Tea\Model;

class kvInfo extends Model
{
    /**
     * @var mixed
     */
    public $data;

    /**
     * @example 6
     *
     * @var int
     */
    public $kvCount;
    protected $_name = [
        'data'    => 'Data',
        'kvCount' => 'KvCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->kvCount) {
            $res['KvCount'] = $this->kvCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return kvInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['KvCount'])) {
            $model->kvCount = $map['KvCount'];
        }

        return $model;
    }
}
