<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeLatestScanTaskResponseBody extends Model
{
    /**
     * @description The timestamp when the last check was performed. Unit: milliseconds.
     *
     * @example 1671610264000
     *
     * @var int
     */
    public $lastCheckTime;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 7E0618A9-D5EF-4220-9471-C42XXXXXXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of virus detection risks on the server.
     *
     * @example 1
     *
     * @var int
     */
    public $riskNum;

    /**
     * @description The applicable scope of the whitelist. The value of this parameter is in the JSON format and contains the following fields:
     *
     *   **type**: the type of the applicable scope. Valid values:
     *
     *   **GroupId**: the ID of a server group
     *   **Uuid**: the UUID of a server
     *
     *   **uuids**: the UUIDs of servers
     *
     *   **groupIds**: the IDs of server groups
     *
     * >  If you leave this parameter empty, all servers are added to the whitelist. If you set the **type** field to **GroupId**, you must also specify the **groupIds** field. If you set the **type** field to **Uuid**, you must also specify the **uuids** field.
     * @example [{"type":"uuid","name":"Host001","target":"503201a7-14c6-4280-801b-1169ed42****"}]
     *
     * @var string
     */
    public $targetInfo;

    /**
     * @description The UUIDs of the assets.
     *
     * @var string[]
     */
    public $uuids;
    protected $_name = [
        'lastCheckTime' => 'LastCheckTime',
        'requestId'     => 'RequestId',
        'riskNum'       => 'RiskNum',
        'targetInfo'    => 'TargetInfo',
        'uuids'         => 'Uuids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lastCheckTime) {
            $res['LastCheckTime'] = $this->lastCheckTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->riskNum) {
            $res['RiskNum'] = $this->riskNum;
        }
        if (null !== $this->targetInfo) {
            $res['TargetInfo'] = $this->targetInfo;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLatestScanTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LastCheckTime'])) {
            $model->lastCheckTime = $map['LastCheckTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RiskNum'])) {
            $model->riskNum = $map['RiskNum'];
        }
        if (isset($map['TargetInfo'])) {
            $model->targetInfo = $map['TargetInfo'];
        }
        if (isset($map['Uuids'])) {
            if (!empty($map['Uuids'])) {
                $model->uuids = $map['Uuids'];
            }
        }

        return $model;
    }
}
