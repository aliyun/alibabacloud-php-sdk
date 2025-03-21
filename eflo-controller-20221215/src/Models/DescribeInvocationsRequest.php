<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class DescribeInvocationsRequest extends Model
{
    /**
     * @description Sets the encoding method for the `CommandContent` and `Output` fields in the returned data. Possible values:
     *
     * - PlainText: Returns the original command content and output information.
     * - Base64: Returns the Base64-encoded command content and output information.
     *
     * Default value: Base64.
     *
     * @example PlainText
     *
     * @var string
     */
    public $contentEncoding;

    /**
     * @description Indicates whether to return the output information of the command execution in the result.
     *
     * - true: Return. In this case, you must specify at least the `InvokeId` or `InstanceId` parameter.
     * - false: Do not return.
     *
     * Default value: false.
     *
     * @example true
     *
     * @var bool
     */
    public $includeOutput;

    /**
     * @description Command execution ID
     *
     * This parameter is required.
     *
     * @example t-cd03crwys0lrls0
     *
     * @var string
     */
    public $invokeId;

    /**
     * @description Instance ID
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
