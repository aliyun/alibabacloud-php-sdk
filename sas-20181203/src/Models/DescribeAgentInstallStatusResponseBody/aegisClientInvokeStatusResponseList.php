<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAgentInstallStatusResponseBody;

use AlibabaCloud\Tea\Model;

class aegisClientInvokeStatusResponseList extends Model
{
    /**
     * @description The message returned.
     *
     * @example Installed
     *
     * @var string
     */
    public $message;

    /**
     * @description The result code returned. Valid values:
     *
     *   **-1**: The agent is not installed.
     *   **0**: The agent is installed.
     *   **1**: The directory of the agent failed to be created.
     *   **2**: The installation package failed to be downloaded.
     *   **3**: The installation file does not exist.
     *   **4**: The verification information about the installation file does not exist.
     *   **5**: The installation file failed to pass the verification.
     *   **6**: The installation file failed to be executed.
     *   **7**: The agent failed to be installed because the required permissions are not granted.
     *   **8**: No process of the agent was detected.
     *   **100**: The agent failed to be installed because an unknown error occurred.
     *   **1001**: The agent failed to be installed because the automatic installation of the agent is not supported in the region.
     *   **1002**: The agent failed to be installed because the agent cannot be installed on servers outside the cloud. You can install the agent only on supported servers.
     *   **1003**: The agent failed to be installed because the operating system type of the server is not supported.
     *   **1004**: An internal error occurred. Try again later.
     *   **1005**: The Elastic Compute Service (ECS) instance is not running. Start the ECS instance and try again.
     *   **1006**: The automatic installation of the agent is not supported on an ECS instance that resides in the classic network.
     *   **1007**: The process of the installation command is manually stopped.
     *   **1008**: The agent failed to be installed because Cloud Assistant is not installed.
     *   **1009**: The execution of the installation command timed out. Try again later.
     *   **1010**: The agent on the server is already online. You do not need to install the agent.
     *
     * @example 1
     *
     * @var string
     */
    public $resuleCode;

    /**
     * @description The installation result. Valid value:
     *
     *   **-1**: not installed
     *   **0**: being installed
     *   **1**: installed
     *   **2**: installation failed
     *
     * @example 0
     *
     * @var int
     */
    public $result;

    /**
     * @description The UUID of the server.
     *
     * @example d123f6ae-9749-4338-8c7f-3c2c1ead****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'message'    => 'Message',
        'resuleCode' => 'ResuleCode',
        'result'     => 'Result',
        'uuid'       => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->resuleCode) {
            $res['ResuleCode'] = $this->resuleCode;
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
     * @return aegisClientInvokeStatusResponseList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ResuleCode'])) {
            $model->resuleCode = $map['ResuleCode'];
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
