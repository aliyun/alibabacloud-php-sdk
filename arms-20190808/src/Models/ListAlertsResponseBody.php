<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListAlertsResponseBody\pageBean;

class ListAlertsResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;
    /**
     * @var pageBean
     */
    public $pageBean;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'message'   => 'Message',
        'pageBean'  => 'PageBean',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->pageBean) {
            $this->pageBean->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->pageBean) {
            $res['PageBean'] = null !== $this->pageBean ? $this->pageBean->toArray($noStream) : $this->pageBean;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['PageBean'])) {
            $model->pageBean = pageBean::fromMap($map['PageBean']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
