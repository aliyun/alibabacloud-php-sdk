<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortAutoCcStatusResponseBody;

use AlibabaCloud\Tea\Model;

class portAutoCcStatus extends Model
{
    /**
     * @description The mode of the Intelligent Protection policy. Valid values:
     *
     *   **normal**
     *   **loose**
     *   **strict**
     *
     * @example normal
     *
     * @var string
     */
    public $mode;

    /**
     * @description The status of the Intelligent Protection policy. Valid values:
     *
     *   **on**: enabled
     *   **off**: disabled
     *
     * @example on
     *
     * @var string
     */
    public $switch;

    /**
     * @description The protection mode for ports 80 and 443. Valid values:
     *
     *   **normal**
     *   **loose**
     *   **strict**
     *
     * @example normal
     *
     * @var string
     */
    public $webMode;

    /**
     * @description The status of the Intelligent Protection policy for ports 80 and 443. Valid values:
     *
     *   **on**: enabled
     *   **off**: disabled
     *
     * @example off
     *
     * @var string
     */
    public $webSwitch;
    protected $_name = [
        'mode'      => 'Mode',
        'switch'    => 'Switch',
        'webMode'   => 'WebMode',
        'webSwitch' => 'WebSwitch',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->switch) {
            $res['Switch'] = $this->switch;
        }
        if (null !== $this->webMode) {
            $res['WebMode'] = $this->webMode;
        }
        if (null !== $this->webSwitch) {
            $res['WebSwitch'] = $this->webSwitch;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return portAutoCcStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Switch'])) {
            $model->switch = $map['Switch'];
        }
        if (isset($map['WebMode'])) {
            $model->webMode = $map['WebMode'];
        }
        if (isset($map['WebSwitch'])) {
            $model->webSwitch = $map['WebSwitch'];
        }

        return $model;
    }
}
