<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ft\V20210101\Models;

use AlibabaCloud\SDK\Ft\V20210101\Models\RpcUploadDemoRequest\cardData;
use AlibabaCloud\Tea\Model;

class RpcUploadDemoRequest extends Model
{
    /**
     * @var cardData
     */
    public $cardData;

    /**
     * @var string
     */
    public $outTrackId;

    /**
     * @var string[]
     */
    public $privateData;
    protected $_name = [
        'cardData'    => 'cardData',
        'outTrackId'  => 'outTrackId',
        'privateData' => 'privateData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cardData) {
            $res['cardData'] = null !== $this->cardData ? $this->cardData->toMap() : null;
        }
        if (null !== $this->outTrackId) {
            $res['outTrackId'] = $this->outTrackId;
        }
        if (null !== $this->privateData) {
            $res['privateData'] = $this->privateData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RpcUploadDemoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cardData'])) {
            $model->cardData = cardData::fromMap($map['cardData']);
        }
        if (isset($map['outTrackId'])) {
            $model->outTrackId = $map['outTrackId'];
        }
        if (isset($map['privateData'])) {
            $model->privateData = $map['privateData'];
        }

        return $model;
    }
}
