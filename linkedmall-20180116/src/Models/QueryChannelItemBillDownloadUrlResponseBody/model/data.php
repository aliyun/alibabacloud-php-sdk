<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryChannelItemBillDownloadUrlResponseBody\model;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example BILL-10000014****3410148
     *
     * @var string
     */
    public $billId;

    /**
     * @example http://linkedmall-product.oss-cn-hangzhou.aliyuncs.com/LMALL2*****60001/2619709162****
     *
     * @var string
     */
    public $fileDownloadUrl;

    /**
     * @var string
     */
    public $message;
    protected $_name = [
        'billId'          => 'BillId',
        'fileDownloadUrl' => 'FileDownloadUrl',
        'message'         => 'Message',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billId) {
            $res['BillId'] = $this->billId;
        }
        if (null !== $this->fileDownloadUrl) {
            $res['FileDownloadUrl'] = $this->fileDownloadUrl;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
        if (isset($map['BillId'])) {
            $model->billId = $map['BillId'];
        }
        if (isset($map['FileDownloadUrl'])) {
            $model->fileDownloadUrl = $map['FileDownloadUrl'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
