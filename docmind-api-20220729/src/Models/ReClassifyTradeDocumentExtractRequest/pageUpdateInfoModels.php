<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220729\Models\ReClassifyTradeDocumentExtractRequest;

use AlibabaCloud\Tea\Model;

class pageUpdateInfoModels extends Model
{
    /**
     * @var string
     */
    public $attTypeCode;

    /**
     * @var string
     */
    public $pageId;
    protected $_name = [
        'attTypeCode' => 'AttTypeCode',
        'pageId'      => 'PageId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attTypeCode) {
            $res['AttTypeCode'] = $this->attTypeCode;
        }
        if (null !== $this->pageId) {
            $res['PageId'] = $this->pageId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageUpdateInfoModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttTypeCode'])) {
            $model->attTypeCode = $map['AttTypeCode'];
        }
        if (isset($map['PageId'])) {
            $model->pageId = $map['PageId'];
        }

        return $model;
    }
}
