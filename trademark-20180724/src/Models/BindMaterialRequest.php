<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class BindMaterialRequest extends Model
{
    /**
     * @var string
     */
    public $materialId;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $loaOssKey;

    /**
     * @var string
     */
    public $legalNoticeKey;
    protected $_name = [
        'materialId'     => 'MaterialId',
        'bizId'          => 'BizId',
        'loaOssKey'      => 'LoaOssKey',
        'legalNoticeKey' => 'LegalNoticeKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->materialId) {
            $res['MaterialId'] = $this->materialId;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->loaOssKey) {
            $res['LoaOssKey'] = $this->loaOssKey;
        }
        if (null !== $this->legalNoticeKey) {
            $res['LegalNoticeKey'] = $this->legalNoticeKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindMaterialRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaterialId'])) {
            $model->materialId = $map['MaterialId'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['LoaOssKey'])) {
            $model->loaOssKey = $map['LoaOssKey'];
        }
        if (isset($map['LegalNoticeKey'])) {
            $model->legalNoticeKey = $map['LegalNoticeKey'];
        }

        return $model;
    }
}
