<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220729\Models;

use AlibabaCloud\Tea\Model;

class ReClassifyTradeDocumentExtractShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $pageUpdateInfoModelsShrink;
    protected $_name = [
        'bizId'                      => 'BizId',
        'pageUpdateInfoModelsShrink' => 'PageUpdateInfoModels',
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
        if (null !== $this->pageUpdateInfoModelsShrink) {
            $res['PageUpdateInfoModels'] = $this->pageUpdateInfoModelsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReClassifyTradeDocumentExtractShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['PageUpdateInfoModels'])) {
            $model->pageUpdateInfoModelsShrink = $map['PageUpdateInfoModels'];
        }

        return $model;
    }
}
