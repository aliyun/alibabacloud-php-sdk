<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class OperateSuspiciousTargetConfigRequest extends Model
{
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
     * @description The source IP address of the request.
     *
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The configuration of proactive defense for your server. The value includes the following fields:
     *
     *   **targetType**: specifies the dimension from which you manage proactive defense. UUIDs are supported. Set the value to **uuid**.
     *   **target**: specifies the UUID of the server for which you want to configure proactive defense.
     *   **flag**: specifies whether to enable or disable proactive defense for your server. Valid values are **add** and **del**. The value add indicates that proactive defense will be enabled for your server. The value del indicates that proactive defense will be disabled for your server.
     *
     * This parameter is required.
     * @example "[{"targetType":"uuid","target":"0585f81a-dd84-4ddf-9971-f59d12345678","flag":"add"},{"targetType":"uuid","target":"01acfd9d-e6a4-4e61-b9eb-aae012345678","flag":"add"},{"targetType":"uuid","target":"04a0e735-ad32-4835-b635-045812345678","flag":"add"}]"
     *
     * @var string
     */
    public $targetOperations;

    /**
     * @description The dimension from which you manage proactive defense. Only the server UUID dimension is supported.
     *
     * Set the value to **uuid**.
     *
     * This parameter is required.
     * @example uuid
     *
     * @var string
     */
    public $targetType;

    /**
     * @description The type of proactive defense. Valid Values:
     *
     *   **auto_breaking**: automatic blocking
     *   **webshell_cloud_breaking**: webshell defense
     *   **alinet**: malicious behavior defense
     *   **ransomware_breaking**: ransomware capture
     *   **alisecguard**: client protection
     *
     * This parameter is required.
     * @example auto_breaking
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'lang'             => 'Lang',
        'sourceIp'         => 'SourceIp',
        'targetOperations' => 'TargetOperations',
        'targetType'       => 'TargetType',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->targetOperations) {
            $res['TargetOperations'] = $this->targetOperations;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OperateSuspiciousTargetConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['TargetOperations'])) {
            $model->targetOperations = $map['TargetOperations'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
