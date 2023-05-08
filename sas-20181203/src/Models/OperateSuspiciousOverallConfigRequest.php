<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class OperateSuspiciousOverallConfigRequest extends Model
{
    /**
     * @example off
     *
     * @var string
     */
    public $config;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example true
     *
     * @var bool
     */
    public $noTargetAsOn;

    /**
     * @description OperateSuspiciousOverallConfig
     *
     * @example 222.178.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
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
