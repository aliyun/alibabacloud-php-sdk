<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBestSession4ItemsResponseBody\lmItemActivitySessionModelList;
use AlibabaCloud\Tea\Model;

class QueryBestSession4ItemsResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $code;

    /**
     * @var lmItemActivitySessionModelList
     */
    public $lmItemActivitySessionModelList;
    protected $_name = [
        'message'                        => 'Message',
        'requestId'                      => 'RequestId',
        'code'                           => 'Code',
        'lmItemActivitySessionModelList' => 'LmItemActivitySessionModelList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->lmItemActivitySessionModelList) {
            $res['LmItemActivitySessionModelList'] = null !== $this->lmItemActivitySessionModelList ? $this->lmItemActivitySessionModelList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryBestSession4ItemsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['LmItemActivitySessionModelList'])) {
            $model->lmItemActivitySessionModelList = lmItemActivitySessionModelList::fromMap($map['LmItemActivitySessionModelList']);
        }

        return $model;
    }
}
