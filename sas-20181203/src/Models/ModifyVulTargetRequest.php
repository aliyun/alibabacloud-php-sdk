<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyVulTargetRequest extends Model
{
    /**
     * @description The configurations. The value of this parameter is in the JSON format and contains the following fields:
     *
     *   **vulType**: the type of the vulnerabilities to scan. Valid values:
     *
     *   **cve**: Linux software vulnerabilities
     *   **sys**: Windows system vulnerabilities
     *   **cms**: Web-CMS vulnerabilities
     *   **emg**: urgent vulnerabilities
     *
     * @example {\"vulType\":\"sys\"}
     *
     * @var string
     */
    public $config;

    /**
     * @description The operation. The value of this parameter is in the JSON format and contains the following fields:
     *
     *   **target**: the UUID of the server.
     *
     *   **targetType**: the application scope of the operation. Set the value to uuid.
     *
     *   **flag**: the type of the operation. Valid values:
     *
     *   **add**: select
     *   **del**: deselect
     *
     * @example [{\"target\": \"9cd5c684-7201-4de5-ad2c-cea89a5e****\", \"targetType\": \"uuid\", \"flag\": \"add\"}]
     *
     * @var string
     */
    public $target;
    protected $_name = [
        'config' => 'Config',
        'target' => 'Target',
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
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyVulTargetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        return $model;
    }
}
