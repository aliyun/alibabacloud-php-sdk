<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class BatchRegistAnonymousTbAccountRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $idJsonList;
    protected $_name = [
        'bizId'      => 'BizId',
        'idJsonList' => 'IdJsonList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->idJsonList) {
            $res['IdJsonList'] = $this->idJsonList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchRegistAnonymousTbAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['IdJsonList'])) {
            $model->idJsonList = $map['IdJsonList'];
        }

        return $model;
    }
}
