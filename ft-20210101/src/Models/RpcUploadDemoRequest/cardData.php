<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ft\V20210101\Models\RpcUploadDemoRequest;

use AlibabaCloud\Tea\Model;

class cardData extends Model
{
    /**
     * @var string[]
     */
    public $cardMediaIdParamMap;

    /**
     * @var string[]
     */
    public $cardParamMap;
    protected $_name = [
        'cardMediaIdParamMap' => 'cardMediaIdParamMap',
        'cardParamMap'        => 'cardParamMap',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cardMediaIdParamMap) {
            $res['cardMediaIdParamMap'] = $this->cardMediaIdParamMap;
        }
        if (null !== $this->cardParamMap) {
            $res['cardParamMap'] = $this->cardParamMap;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cardData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cardMediaIdParamMap'])) {
            $model->cardMediaIdParamMap = $map['cardMediaIdParamMap'];
        }
        if (isset($map['cardParamMap'])) {
            $model->cardParamMap = $map['cardParamMap'];
        }

        return $model;
    }
}
