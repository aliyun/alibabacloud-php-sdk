<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspiciousOverallConfigResponseBody;

use AlibabaCloud\Tea\Model;

class overallConfig extends Model
{
    /**
     * @description The status of the feature. Valid values:
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
     * @description The type of the feature. Valid values:
     *
     *   **auto_breaking**: Anti-Virus
     *   **ransomware_breaking**: Anti-ransomware (Bait Capture)
     *   **webshell_cloud_breaking**: Webshell Protection
     *   **alinet**: Behavior prevention
     *   **k8s_log_analysis**: K8s Threat Detection
     *   **alisecguard**: Defense mode for Client Protection
     *
     * @example auto_breaking
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
     * @return overallConfig
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
