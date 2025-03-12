<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListQueryRaspAppInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The name of the RASP-enabled application.
     *
     * @example rasp-app
     *
     * @var string
     */
    public $raspAppName;

    /**
     * @description The online status of the RASP-enabled applications. Valid values:
     *
     *   **0**: All RASP-enabled applications are online.
     *   **1**: Part of the RASP-enabled applications are online.
     *   **2**: All RASP-enabled applications are offline.
     *
     * @example 0
     *
     * @var int
     */
    public $raspOnlineStatus;

    /**
     * @description The installation status of the RASP-enabled application. Valid values:
     *
     *   **SUCCESS**: The RASP-enabled application is installed.
     *   **FAIL**: The RASP-enabled application fails to be installed.
     *   **INSTALL**: The RASP-enabled application is being installed.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $raspStatus;

    /**
     * @description The result returned if the push fails.
     *
     * @example AGENT_OFFLINE
     *
     * @var string
     */
    public $result;

    /**
     * @description The UUID of the asset.
     *
     * @example 6690a46c-0edb-4663-a641-3629d1a9****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'raspAppName'      => 'RaspAppName',
        'raspOnlineStatus' => 'RaspOnlineStatus',
        'raspStatus'       => 'RaspStatus',
        'result'           => 'Result',
        'uuid'             => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->raspAppName) {
            $res['RaspAppName'] = $this->raspAppName;
        }
        if (null !== $this->raspOnlineStatus) {
            $res['RaspOnlineStatus'] = $this->raspOnlineStatus;
        }
        if (null !== $this->raspStatus) {
            $res['RaspStatus'] = $this->raspStatus;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['RaspAppName'])) {
            $model->raspAppName = $map['RaspAppName'];
        }
        if (isset($map['RaspOnlineStatus'])) {
            $model->raspOnlineStatus = $map['RaspOnlineStatus'];
        }
        if (isset($map['RaspStatus'])) {
            $model->raspStatus = $map['RaspStatus'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
