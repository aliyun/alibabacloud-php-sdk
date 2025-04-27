<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeGeneralStructureResponseBody\data\subImages;

use AlibabaCloud\Dara\Model;

class kvInfo extends Model
{
    /**
     * @var mixed
     */
    public $data;

    /**
     * @var int
     */
    public $kvCount;
    protected $_name = [
        'data' => 'Data',
        'kvCount' => 'KvCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
