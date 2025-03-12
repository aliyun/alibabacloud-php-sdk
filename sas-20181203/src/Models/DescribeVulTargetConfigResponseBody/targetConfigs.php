<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulTargetConfigResponseBody;

use AlibabaCloud\Tea\Model;

class targetConfigs extends Model
{
    /**
     * @description Indicates whether the vulnerability scan feature is enabled for the server.
     *
     *   **off**: disabled
     *   **on**: enabled
     *
     * @example on
     *
     * @var string
     */
    public $config;

    /**
     * @description Indicates whether the vulnerability scan feature is enabled for all servers. Valid values:
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
     * @description The type of the vulnerability. Valid values:
     *
     *   **cve**: Linux software vulnerability
     *   **sys**: Windows system vulnerability
     *   **cms**: Web-CMS vulnerability
     *   **emg**: urgent vulnerability
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
