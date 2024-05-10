<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class OperateSuspiciousOverallConfigRequest extends Model
{
    /**
     * @description Specifies whether to enable the feature. Valid values:
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
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description Specifies whether to configure assets for the feature. Default value: **false**. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * >  This parameter takes effect only when you set **Config** to **on**.
     * @example true
     *
     * @var bool
     */
    public $noTargetAsOn;

    /**
     * @description The source IP address of the request.
     *
     * @example 222.178.XX.XX
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
     * @example k8s_log_analysis
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'config'       => 'Config',
        'lang'         => 'Lang',
        'noTargetAsOn' => 'NoTargetAsOn',
        'sourceIp'     => 'SourceIp',
        'type'         => 'Type',
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->noTargetAsOn) {
            $res['NoTargetAsOn'] = $this->noTargetAsOn;
        }
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
     * @return OperateSuspiciousOverallConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['NoTargetAsOn'])) {
            $model->noTargetAsOn = $map['NoTargetAsOn'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
