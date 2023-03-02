<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models\BindProduceAuthorizationResponseBody;

use AlibabaCloud\SDK\Companyreg\V20200306\Models\BindProduceAuthorizationResponseBody\data\authorizedUserList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var authorizedUserList[]
     */
    public $authorizedUserList;

    /**
     * @var string
     */
    public $message;

    /**
     * @example false
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'authorizedUserList' => 'AuthorizedUserList',
        'message'            => 'Message',
        'success'            => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizedUserList) {
            $res['AuthorizedUserList'] = [];
            if (null !== $this->authorizedUserList && \is_array($this->authorizedUserList)) {
                $n = 0;
                foreach ($this->authorizedUserList as $item) {
                    $res['AuthorizedUserList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizedUserList'])) {
            if (!empty($map['AuthorizedUserList'])) {
                $model->authorizedUserList = [];
                $n                         = 0;
                foreach ($map['AuthorizedUserList'] as $item) {
                    $model->authorizedUserList[$n++] = null !== $item ? authorizedUserList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
