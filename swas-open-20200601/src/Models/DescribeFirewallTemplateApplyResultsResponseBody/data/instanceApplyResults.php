<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeFirewallTemplateApplyResultsResponseBody\data;

use AlibabaCloud\Tea\Model;

class instanceApplyResults extends Model
{
    /**
     * @description The ID of the simple application server.
     *
     * @example 33774babccc84003a2b1ad47e8001233
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The status of applying the firewall template to the simple application servers. Valid values:
     *
     *   Running: The firewall template is being applied to the simple application servers.
     *   Failed: The firewall template is applied to none of the simple application servers.
     *   Success: The firewall template is applied to all the simple application servers.
     *   PartFailed: The firewall template fails to be applied to some simple application servers.
     *
     * @example Success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceApplyResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
