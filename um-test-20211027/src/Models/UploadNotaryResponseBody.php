<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umtest\V20211027\Models;

use AlibabaCloud\Tea\Model;

class UploadNotaryResponseBody extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $detailMsg;

    /**
     * @var string
     */
    public $msg;
    protected $_name = [
        'code'      => 'code',
        'data'      => 'data',
        'detailMsg' => 'detailMsg',
        'msg'       => 'msg',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }
        if (null !== $this->detailMsg) {
            $res['detailMsg'] = $this->detailMsg;
        }
        if (null !== $this->msg) {
            $res['msg'] = $this->msg;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadNotaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['data'])) {
            $model->data = $map['data'];
        }
        if (isset($map['detailMsg'])) {
            $model->detailMsg = $map['detailMsg'];
        }
        if (isset($map['msg'])) {
            $model->msg = $map['msg'];
        }

        return $model;
    }
}
