<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models\BindProduceAuthorizationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Companyreg\V20200306\Models\BindProduceAuthorizationResponseBody\data\authorizedUserList;

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
     * @var bool
     */
    public $success;
    protected $_name = [
        'authorizedUserList' => 'AuthorizedUserList',
        'message' => 'Message',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->authorizedUserList)) {
            Model::validateArray($this->authorizedUserList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizedUserList) {
            if (\is_array($this->authorizedUserList)) {
                $res['AuthorizedUserList'] = [];
                $n1 = 0;
                foreach ($this->authorizedUserList as $item1) {
                    $res['AuthorizedUserList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizedUserList'])) {
            if (!empty($map['AuthorizedUserList'])) {
                $model->authorizedUserList = [];
                $n1 = 0;
                foreach ($map['AuthorizedUserList'] as $item1) {
                    $model->authorizedUserList[$n1] = authorizedUserList::fromMap($item1);
                    ++$n1;
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
