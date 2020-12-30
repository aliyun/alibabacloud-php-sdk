<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetAlbumsByNamesResponseBody\albums;
use AlibabaCloud\Tea\Model;

class GetAlbumsByNamesResponseBody extends Model
{
    /**
     * @var string
     */
    public $action;

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
     * @var albums[]
     */
    public $albums;
    protected $_name = [
        'action'    => 'Action',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'code'      => 'Code',
        'albums'    => 'Albums',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->albums) {
            $res['Albums'] = [];
            if (null !== $this->albums && \is_array($this->albums)) {
                $n = 0;
                foreach ($this->albums as $item) {
                    $res['Albums'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAlbumsByNamesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Albums'])) {
            if (!empty($map['Albums'])) {
                $model->albums = [];
                $n             = 0;
                foreach ($map['Albums'] as $item) {
                    $model->albums[$n++] = null !== $item ? albums::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
