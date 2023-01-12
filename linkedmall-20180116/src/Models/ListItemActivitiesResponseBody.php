<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ListItemActivitiesResponseBody\lmItemActivityModelList;
use AlibabaCloud\Tea\Model;

class ListItemActivitiesResponseBody extends Model
{
    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $code;

    /**
     * @var lmItemActivityModelList
     */
    public $lmItemActivityModelList;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $message;

    /**
     * @example 1718921E-C8D4-55E1-B8D4-114AE537C1B7
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'                    => 'Code',
        'lmItemActivityModelList' => 'LmItemActivityModelList',
        'message'                 => 'Message',
        'requestId'               => 'RequestId',
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
        if (null !== $this->lmItemActivityModelList) {
            $res['LmItemActivityModelList'] = null !== $this->lmItemActivityModelList ? $this->lmItemActivityModelList->toMap() : null;
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
     * @return ListItemActivitiesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['LmItemActivityModelList'])) {
            $model->lmItemActivityModelList = lmItemActivityModelList::fromMap($map['LmItemActivityModelList']);
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
