<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class DescribeRecordDataResponseBody extends Model
{
    /**
     * @example 1004849****
     *
     * @var string
     */
    public $acid;

    /**
     * @example 1212****
     *
     * @var string
     */
    public $agentId;

    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example OK
     *
     * @var string
     */
    public $message;

    /**
     * @example https://****
     *
     * @var string
     */
    public $ossLink;

    /**
     * @example EE338D98-9BD3-4413-B165
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'acid'      => 'Acid',
        'agentId'   => 'AgentId',
        'code'      => 'Code',
        'message'   => 'Message',
        'ossLink'   => 'OssLink',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acid) {
            $res['Acid'] = $this->acid;
        }
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->ossLink) {
            $res['OssLink'] = $this->ossLink;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRecordDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Acid'])) {
            $model->acid = $map['Acid'];
        }
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['OssLink'])) {
            $model->ossLink = $map['OssLink'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
