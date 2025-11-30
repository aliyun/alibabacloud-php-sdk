<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\BatchGetMediaInfosResponseBody\mediaInfos;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\BatchGetMediaInfosResponseBody\mediaInfos\mediaDynamicInfo\dynamicMetaData;

class mediaDynamicInfo extends Model
{
    /**
     * @var dynamicMetaData
     */
    public $dynamicMetaData;
    protected $_name = [
        'dynamicMetaData' => 'DynamicMetaData',
    ];

    public function validate()
    {
        if (null !== $this->dynamicMetaData) {
            $this->dynamicMetaData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dynamicMetaData) {
            $res['DynamicMetaData'] = null !== $this->dynamicMetaData ? $this->dynamicMetaData->toArray($noStream) : $this->dynamicMetaData;
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
        if (isset($map['DynamicMetaData'])) {
            $model->dynamicMetaData = dynamicMetaData::fromMap($map['DynamicMetaData']);
        }

        return $model;
    }
}
