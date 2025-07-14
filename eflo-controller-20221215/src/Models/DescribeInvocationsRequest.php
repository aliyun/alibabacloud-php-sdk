<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class DescribeInvocationsRequest extends Model
{
    /**
     * @description The encoding mode of the `CommandContent` and `Output` response parameters. Valid values:
     *
     *   PlainText: returns the original command content and command outputs.
     *   Base64 (default): returns the Base64-encoded command content and command output.
     *
     * @example PlainText
     *
     * @var string
     */
    public $contentEncoding;

    /**
     * @description Specifies whether to return the command outputs in the response.
     *
     *   true: returns the command outputs. When this parameter is set to true, you must specify `InvokeId`, `InstanceId`, or both.
     *   false (default)
     *
     * @example true
     *
     * @var bool
     */
    public $includeOutput;

    /**
     * @description The execution ID.
     *
     * This parameter is required.
     *
     * @example t-cd03crwys0lrls0
     *
     * @var string
     */
    public $invokeId;

    /**
     * @description The instance ID.
     *
     * @example e01-cn-zvp2tgykr08
     *
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'contentEncoding' => 'ContentEncoding',
        'includeOutput' => 'IncludeOutput',
        'invokeId' => 'InvokeId',
        'nodeId' => 'NodeId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentEncoding) {
            $res['ContentEncoding'] = $this->contentEncoding;
        }
        if (null !== $this->includeOutput) {
            $res['IncludeOutput'] = $this->includeOutput;
        }
        if (null !== $this->invokeId) {
            $res['InvokeId'] = $this->invokeId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInvocationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContentEncoding'])) {
            $model->contentEncoding = $map['ContentEncoding'];
        }
        if (isset($map['IncludeOutput'])) {
            $model->includeOutput = $map['IncludeOutput'];
        }
        if (isset($map['InvokeId'])) {
            $model->invokeId = $map['InvokeId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
