<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyVulConfigRequest extends Model
{
    /**
     * @description Specifies whether to enable the vulnerability scan feature. Valid values:
     *
     *   **on**: enables the feature
     *   **off**: disables the feature
     *
     * > Valid values when you set the Type parameter to scanMode:
     *
     *   **real**: displays only easily exploitable vulnerabilities.
     *
     *   **all**: displays all vulnerabilities.
     *
     * @example on
     *
     * @var string
     */
    public $config;

    /**
     * @description The type of the vulnerability. Valid values:
     *
     *   **cve**: Linux software vulnerability
     *   **sys**: Windows system vulnerability
     *   **cms**: Web-CMS vulnerability
     *   **emg**: urgent vulnerability
     *   **app**: application vulnerability
     *   **yum**: YUM and APT source configuration
     *   **scanMode**: easily exploitable vulnerability
     *
     * @example cve
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'config' => 'Config',
        'type'   => 'Type',
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyVulConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
