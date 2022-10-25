<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\GetCodeCompletionResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $body;

    /**
     * @var string
     */
    public $clientTimestamp;

    /**
     * @var string
     */
    public $fetchTimestamp;

    /**
     * @var string
     */
    public $invokeTimestamp;

    /**
     * @var string
     */
    public $receiveTimestamp;

    /**
     * @var string
     */
    public $rspTimestamp;
    protected $_name = [
        'body'             => 'Body',
        'clientTimestamp'  => 'ClientTimestamp',
        'fetchTimestamp'   => 'FetchTimestamp',
        'invokeTimestamp'  => 'InvokeTimestamp',
        'receiveTimestamp' => 'ReceiveTimestamp',
        'rspTimestamp'     => 'RspTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }
        if (null !== $this->clientTimestamp) {
            $res['ClientTimestamp'] = $this->clientTimestamp;
        }
        if (null !== $this->fetchTimestamp) {
            $res['FetchTimestamp'] = $this->fetchTimestamp;
        }
        if (null !== $this->invokeTimestamp) {
            $res['InvokeTimestamp'] = $this->invokeTimestamp;
        }
        if (null !== $this->receiveTimestamp) {
            $res['ReceiveTimestamp'] = $this->receiveTimestamp;
        }
        if (null !== $this->rspTimestamp) {
            $res['RspTimestamp'] = $this->rspTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }
        if (isset($map['ClientTimestamp'])) {
            $model->clientTimestamp = $map['ClientTimestamp'];
        }
        if (isset($map['FetchTimestamp'])) {
            $model->fetchTimestamp = $map['FetchTimestamp'];
        }
        if (isset($map['InvokeTimestamp'])) {
            $model->invokeTimestamp = $map['InvokeTimestamp'];
        }
        if (isset($map['ReceiveTimestamp'])) {
            $model->receiveTimestamp = $map['ReceiveTimestamp'];
        }
        if (isset($map['RspTimestamp'])) {
            $model->rspTimestamp = $map['RspTimestamp'];
        }

        return $model;
    }
}
