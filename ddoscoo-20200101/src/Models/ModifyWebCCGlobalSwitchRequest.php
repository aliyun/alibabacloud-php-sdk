<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyWebCCGlobalSwitchRequest extends Model
{
    /**
     * @description Specifies whether the HTTP flood mitigation feature is enabled. Valid values:
     *
     *   **open**
     *   **close**
     *
     * This parameter is required.
     * @example open
     *
     * @var string
     */
    public $ccGlobalSwitch;

    /**
     * @description The domain name of the website.
     *
     * This parameter is required.
     * @example example.aliyundoc.com
     *
     * @var string
     */
    public $domain;
    protected $_name = [
        'ccGlobalSwitch' => 'CcGlobalSwitch',
        'domain'         => 'Domain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ccGlobalSwitch) {
            $res['CcGlobalSwitch'] = $this->ccGlobalSwitch;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyWebCCGlobalSwitchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CcGlobalSwitch'])) {
            $model->ccGlobalSwitch = $map['CcGlobalSwitch'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        return $model;
    }
}
