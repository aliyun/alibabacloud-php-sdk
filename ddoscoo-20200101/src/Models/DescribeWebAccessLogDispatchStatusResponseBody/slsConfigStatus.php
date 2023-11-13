<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebAccessLogDispatchStatusResponseBody;

use AlibabaCloud\Tea\Model;

class slsConfigStatus extends Model
{
    /**
     * @description The domain name.
     *
     * @example www.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description Indicates whether the log analysis feature is enabled. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $enable;
    protected $_name = [
        'domain' => 'Domain',
        'enable' => 'Enable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slsConfigStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        return $model;
    }
}
