<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyVulTargetConfigRequest extends Model
{
    /**
     * @description Specifies whether to enable vulnerability detection. Valid values:
     *
     *   **on**: yes
     *   **off**: no
     *
     * This parameter is required.
     * @example off
     *
     * @var string
     */
    public $config;

    /**
     * @description The source IP address of the request.
     *
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The type of the vulnerability. Valid values:
     *
     *   **cve**: Linux software vulnerability
     *   **sys**: Windows system vulnerability
     *   **cms**: Web-CMS vulnerability
     *   **emg**: urgent vulnerability
     *
     * This parameter is required.
     * @example cve
     *
     * @var string
     */
    public $type;

    /**
     * @description The UUID of the server.
     *
     * This parameter is required.
     * @example inet-7c676676-06fa-442e-90fb-b802e5d6****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'config'   => 'Config',
        'sourceIp' => 'SourceIp',
        'type'     => 'Type',
        'uuid'     => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyVulTargetConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
