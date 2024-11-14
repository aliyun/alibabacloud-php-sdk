<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20241107\Models;

use AlibabaCloud\Tea\Model;

class GetLabelTaskResultResponseBody extends Model
{
    /**
     * @example ok
     *
     * @var string
     */
    public $message;

    /**
     * @example D5798660-1531-5D12-9C20-16FEE9D22351
     *
     * @var string
     */
    public $requestId;

    /**
     * @example https://yic-pre.oss-cn-hangzhou.aliyuncs.com/ai_tag_algo_log/1539704706413278/829593441691238400/merge_label_final_result?Expires=1732083305&OSSAccessKeyId=LTAI5tPHLyFPhh4UoRias4Zg&Signature=Am3cBxlc6hYFKtdGlw9o1R26Vsk%3D
     *
     * @var string
     */
    public $resultDataUrl;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @example 20023
     *
     * @var int
     */
    public $tokens;
    protected $_name = [
        'message'       => 'message',
        'requestId'     => 'requestId',
        'resultDataUrl' => 'resultDataUrl',
        'status'        => 'status',
        'tokens'        => 'tokens',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->resultDataUrl) {
            $res['resultDataUrl'] = $this->resultDataUrl;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->tokens) {
            $res['tokens'] = $this->tokens;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLabelTaskResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['resultDataUrl'])) {
            $model->resultDataUrl = $map['resultDataUrl'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['tokens'])) {
            $model->tokens = $map['tokens'];
        }

        return $model;
    }
}
