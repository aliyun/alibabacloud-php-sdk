<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class ModifyPolicyAdvancedConfigRequest extends Model
{
    /**
     * @description The IP addresses. The versions of the IP addresses must be the same. You can specify a maximum of 100 IP addresses.
     *
     * @var string[]
     */
    public $eips;

    /**
     * @description Specifies whether to enable the strict mode for the access control policy. Valid values:
     *
     *   **on**: enables the strict mode.
     *   **off**: disables the strict mode.
     *
     * This parameter is required.
     *
     * @example off
     *
     * @var string
     */
    public $internetSwitch;

    /**
     * @description The natural language of the request and response. Valid values:
     *
     *   **zh**: Chinese (default)
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
     * @example 192.0.XX.XX
     *
     * @deprecated
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'eips' => 'Eips',
        'internetSwitch' => 'InternetSwitch',
        'lang' => 'Lang',
        'sourceIp' => 'SourceIp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->eips) {
            $res['Eips'] = $this->eips;
        }
        if (null !== $this->internetSwitch) {
            $res['InternetSwitch'] = $this->internetSwitch;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyPolicyAdvancedConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Eips'])) {
            if (!empty($map['Eips'])) {
                $model->eips = $map['Eips'];
            }
        }
        if (isset($map['InternetSwitch'])) {
            $model->internetSwitch = $map['InternetSwitch'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
