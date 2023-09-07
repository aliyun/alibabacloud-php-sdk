<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\DataSubImagesKvInfoKvDetailsValue;
use AlibabaCloud\Tea\Model;

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

    /**
     * @var DataSubImagesKvInfoKvDetailsValue[]
     */
    public $kvDetails;
    protected $_name = [
        'data'      => 'Data',
        'kvCount'   => 'KvCount',
        'kvDetails' => 'KvDetails',
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
        if (null !== $this->kvDetails) {
            $res['KvDetails'] = [];
            if (null !== $this->kvDetails && \is_array($this->kvDetails)) {
                foreach ($this->kvDetails as $key => $val) {
                    $res['KvDetails'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
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
        if (isset($map['KvDetails'])) {
            $model->kvDetails = $map['KvDetails'];
        }

        return $model;
    }
}
