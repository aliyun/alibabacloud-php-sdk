<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class GetAgentDownloadUrlV2Request extends Model
{
    /**
     * @var string
     */
    public $agentType;

    /**
     * @var string
     */
    public $archType;

    /**
     * @var string
     */
    public $osType;
    protected $_name = [
        'agentType' => 'AgentType',
        'archType' => 'ArchType',
        'osType' => 'OsType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
