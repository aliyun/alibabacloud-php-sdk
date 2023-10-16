<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class BindMaterialRequest extends Model
{
    /**
     * @example trademark_register-cn-11212
     *
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $legalNoticeKey;

    /**
     * @example /test/loaosskey.jpg
     *
     * @var string
     */
    public $loaOssKey;

    /**
     * @example 11
     *
     * @var string
     */
    public $materialId;
    protected $_name = [
        'bizId'          => 'BizId',
        'legalNoticeKey' => 'LegalNoticeKey',
        'loaOssKey'      => 'LoaOssKey',
        'materialId'     => 'MaterialId',
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
        if (null !== $this->legalNoticeKey) {
            $res['LegalNoticeKey'] = $this->legalNoticeKey;
        }
        if (null !== $this->loaOssKey) {
            $res['LoaOssKey'] = $this->loaOssKey;
        }
        if (null !== $this->materialId) {
            $res['MaterialId'] = $this->materialId;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['LegalNoticeKey'])) {
            $model->legalNoticeKey = $map['LegalNoticeKey'];
        }
        if (isset($map['LoaOssKey'])) {
            $model->loaOssKey = $map['LoaOssKey'];
        }
        if (isset($map['MaterialId'])) {
            $model->materialId = $map['MaterialId'];
        }

        return $model;
    }
}
