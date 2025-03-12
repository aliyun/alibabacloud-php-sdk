<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Tea\Model;

class DescribeLayer4RulesRequest extends Model
{
    /**
     * @description The type of forwarding protocol. Values:
     * - **tcp**: Indicates TCP protocol.
     * - **udp**: Indicates UDP protocol.
     * @example tcp
     *
     * @var string
     */
    public $forwardProtocol;

    /**
     * @description The forwarding port.
     *
     * @example 233
     *
     * @var int
     */
    public $frontendPort;

    /**
     * @description The ID of the DDoS protection instance to be queried.
     *
     * This parameter is required.
     * @example ddoscoo-cn-zvp2ay9b****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description In paginated queries, specifies which page of data to return. The minimum value is **1**, indicating the first page of data.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $offset;

    /**
     * @description In paginated queries, specifies the number of results per page. The maximum value is **50**, indicating that each page can contain up to 50 results.
     *
     * This parameter is required.
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The source IP address of the request. You do not need to fill this in; it is automatically obtained by the system.
     *
     * @example 192.0.XX.XX
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'forwardProtocol' => 'ForwardProtocol',
        'frontendPort'    => 'FrontendPort',
        'instanceId'      => 'InstanceId',
        'offset'          => 'Offset',
        'pageSize'        => 'PageSize',
        'sourceIp'        => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forwardProtocol) {
            $res['ForwardProtocol'] = $this->forwardProtocol;
        }
        if (null !== $this->frontendPort) {
            $res['FrontendPort'] = $this->frontendPort;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLayer4RulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForwardProtocol'])) {
            $model->forwardProtocol = $map['ForwardProtocol'];
        }
        if (isset($map['FrontendPort'])) {
            $model->frontendPort = $map['FrontendPort'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
