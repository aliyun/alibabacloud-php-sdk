<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeGeneralStructureResponseBody\data;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeGeneralStructureResponseBody\data\subImages\kvInfo;
use AlibabaCloud\Tea\Model;

class subImages extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $angle;

    /**
     * @var kvInfo
     */
    public $kvInfo;

    /**
     * @example 0
     *
     * @var int
     */
    public $subImageId;
    protected $_name = [
        'angle'      => 'Angle',
        'kvInfo'     => 'KvInfo',
        'subImageId' => 'SubImageId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->angle) {
            $res['Angle'] = $this->angle;
        }
        if (null !== $this->kvInfo) {
            $res['KvInfo'] = null !== $this->kvInfo ? $this->kvInfo->toMap() : null;
        }
        if (null !== $this->subImageId) {
            $res['SubImageId'] = $this->subImageId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subImages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Angle'])) {
            $model->angle = $map['Angle'];
        }
        if (isset($map['KvInfo'])) {
            $model->kvInfo = kvInfo::fromMap($map['KvInfo']);
        }
        if (isset($map['SubImageId'])) {
            $model->subImageId = $map['SubImageId'];
        }

        return $model;
    }
}
