<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeGeneralStructureResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeGeneralStructureResponseBody\data\subImages\kvInfo;

class subImages extends Model
{
    /**
     * @var int
     */
    public $angle;

    /**
     * @var kvInfo
     */
    public $kvInfo;

    /**
     * @var int
     */
    public $subImageId;
    protected $_name = [
        'angle' => 'Angle',
        'kvInfo' => 'KvInfo',
        'subImageId' => 'SubImageId',
    ];

    public function validate()
    {
        if (null !== $this->kvInfo) {
            $this->kvInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->angle) {
            $res['Angle'] = $this->angle;
        }

        if (null !== $this->kvInfo) {
            $res['KvInfo'] = null !== $this->kvInfo ? $this->kvInfo->toArray($noStream) : $this->kvInfo;
        }

        if (null !== $this->subImageId) {
            $res['SubImageId'] = $this->subImageId;
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
