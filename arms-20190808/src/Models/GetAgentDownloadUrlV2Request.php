<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetAgentDownloadUrlV2Request extends Model
{
    /**
     * @description The agent type.\\
     **Valid values:**
     *
     *   **JavaAgent**
     *   **Instgo**
     *
     * This parameter is required.
     *
     * @example JavaAgent
     *
     * @var string
     */
    public $agentType;

    /**
     * @description The architecture type of the environment where the agent is installed.\\
     * This parameter is required and valid only when **AgentType** is set to **Instgo**.\\
     **Valid values:**
     *
     *   **amd64**
     *   **arm64**
     *
     * @example amd64
     *
     * @var string
     */
    public $archType;

    /**
     * @description The operating system of the environment where the agent is installed.\\
     * This parameter is required and valid only when **AgentType** is set to **Instgo**.\\
     **Valid values:**
     *
     *   **linux**
     *   **darwin**
     *   **windows**
     *
     * @example linux
     *
     * @var string
     */
    public $osType;
    protected $_name = [
        'agentType' => 'AgentType',
        'archType' => 'ArchType',
        'osType' => 'OsType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentType) {
            $res['AgentType'] = $this->agentType;
        }
        if (null !== $this->archType) {
            $res['ArchType'] = $this->archType;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAgentDownloadUrlV2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentType'])) {
            $model->agentType = $map['AgentType'];
        }
        if (isset($map['ArchType'])) {
            $model->archType = $map['ArchType'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }

        return $model;
    }
}
