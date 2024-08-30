<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetAgentDownloadUrlV2Request extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example JavaAgent
     *
     * @var string
     */
    public $agentType;

    /**
     * @example amd64
     *
     * @var string
     */
    public $archType;

    /**
     * @example linux
     *
     * @var string
     */
    public $osType;
    protected $_name = [
        'agentType' => 'AgentType',
        'archType'  => 'ArchType',
        'osType'    => 'OsType',
    ];

    public function validate()
    {
    }

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
