<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeSuspiciousOverallConfigRequest extends Model
{
    /**
     * @description The source IP address of the request.
     *
     * @example 39.161.XX.XX
     *
     * @var string
     */
    public $sourceIp;

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
     * This parameter is required.
     * @example auto_breaking
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'sourceIp' => 'SourceIp',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSuspiciousOverallConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
