<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulConfigResponseBody;

use AlibabaCloud\Tea\Model;

class targetConfigs extends Model
{
    /**
     * @description The configuration of vulnerability scan.
     *
     * > Valid values when you set the Type parameter to **cve**, **sys**, **cms**, **app**, **emg**, or **yum**:
     *
     *   **on**: enabled
     *
     *   **off**: disabled
     *
     * Valid values when you set the Type parameter to **scanMode**:
     *
     *   **real**: displays easily exploitable vulnerability.
     *
     *   **all**: displays all vulnerabilities.
     *
     * When you set the Type parameter to **imageVulClean**, the value of this parameter indicates the vulnerability retention period in days.
     * @example 90
     *
     * @var string
     */
    public $config;

    /**
     * @description Indicates whether the vulnerability management feature is enabled for all servers. Valid values:
     *
     *   **off**: disabled
     *   **on**: enabled
     *
     * @example on
     *
     * @var string
     */
    public $overAllConfig;

    /**
     * @description The type of configuration. Valid values:
     *
     *   **cve**: Linux software vulnerability.
     *   **sys**: Windows system vulnerability.
     *   **cms**: Web-CMS vulnerability.
     *   **app**: application vulnerability that is detected by using web scanner.
     *   **emg**: urgent vulnerability.
     *   **scanMode**: displays easily exploitable vulnerability.
     *   **imageVulClean**: vulnerability retention duration.
     *   **yum**: preferentially uses YUM or APT sources of Alibaba Cloud to fix vulnerabilities.
     *
     * @example cve
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'config'        => 'Config',
        'overAllConfig' => 'OverAllConfig',
        'type'          => 'Type',
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
        if (null !== $this->overAllConfig) {
            $res['OverAllConfig'] = $this->overAllConfig;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['OverAllConfig'])) {
            $model->overAllConfig = $map['OverAllConfig'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
