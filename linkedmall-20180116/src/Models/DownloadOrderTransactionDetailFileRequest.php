<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class DownloadOrderTransactionDetailFileRequest extends Model
{
    /**
     * @example LMALL202111020001
     *
     * @var string
     */
    public $bizId;

    /**
     * @example ORDER-b454a111647844f5aa005dda94454751
     *
     * @var string
     */
    public $recordId;
    protected $_name = [
        'bizId'    => 'BizId',
        'recordId' => 'RecordId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DownloadOrderTransactionDetailFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }

        return $model;
    }
}
