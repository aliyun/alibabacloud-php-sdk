<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220729\Models;

use AlibabaCloud\SDK\Docmindapi\V20220729\Models\ReClassifyTradeDocumentExtractRequest\pageUpdateInfoModels;
use AlibabaCloud\Tea\Model;

class ReClassifyTradeDocumentExtractRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var pageUpdateInfoModels[]
     */
    public $pageUpdateInfoModels;
    protected $_name = [
        'bizId'                => 'BizId',
        'pageUpdateInfoModels' => 'PageUpdateInfoModels',
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
        if (null !== $this->pageUpdateInfoModels) {
            $res['PageUpdateInfoModels'] = [];
            if (null !== $this->pageUpdateInfoModels && \is_array($this->pageUpdateInfoModels)) {
                $n = 0;
                foreach ($this->pageUpdateInfoModels as $item) {
                    $res['PageUpdateInfoModels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReClassifyTradeDocumentExtractRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['PageUpdateInfoModels'])) {
            if (!empty($map['PageUpdateInfoModels'])) {
                $model->pageUpdateInfoModels = [];
                $n                           = 0;
                foreach ($map['PageUpdateInfoModels'] as $item) {
                    $model->pageUpdateInfoModels[$n++] = null !== $item ? pageUpdateInfoModels::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
