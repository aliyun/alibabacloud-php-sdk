<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetParseResultResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example pdf
     *
     * @var string
     */
    public $fileType;

    /**
     * @example null
     *
     * @var string
     */
    public $providerType;

    /**
     * @example b0a202e2-5031-4589-a6d7-39185f0d8d01
     *
     * @var string
     */
    public $requestId;

    /**
     * @example {
     * }
     * @var mixed[]
     */
    public $result;

    /**
     * @var string
     */
    public $resultUrl;

    /**
     * @example WaitRefresh
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'fileType'     => 'fileType',
        'providerType' => 'providerType',
        'requestId'    => 'requestId',
        'result'       => 'result',
        'resultUrl'    => 'resultUrl',
        'status'       => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileType) {
            $res['fileType'] = $this->fileType;
        }
        if (null !== $this->providerType) {
            $res['providerType'] = $this->providerType;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }
        if (null !== $this->resultUrl) {
            $res['resultUrl'] = $this->resultUrl;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['fileType'])) {
            $model->fileType = $map['fileType'];
        }
        if (isset($map['providerType'])) {
            $model->providerType = $map['providerType'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['result'])) {
            $model->result = $map['result'];
        }
        if (isset($map['resultUrl'])) {
            $model->resultUrl = $map['resultUrl'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
