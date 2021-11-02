<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUnfinishedSessions4ItemsResponseBody\lmItemActivitySessionModelListList;
use AlibabaCloud\Tea\Model;

class QueryUnfinishedSessions4ItemsResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var lmItemActivitySessionModelListList
     */
    public $lmItemActivitySessionModelListList;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'                               => 'Code',
        'lmItemActivitySessionModelListList' => 'LmItemActivitySessionModelListList',
        'message'                            => 'Message',
        'requestId'                          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->lmItemActivitySessionModelListList) {
            $res['LmItemActivitySessionModelListList'] = null !== $this->lmItemActivitySessionModelListList ? $this->lmItemActivitySessionModelListList->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryUnfinishedSessions4ItemsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['LmItemActivitySessionModelListList'])) {
            $model->lmItemActivitySessionModelListList = lmItemActivitySessionModelListList::fromMap($map['LmItemActivitySessionModelListList']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
