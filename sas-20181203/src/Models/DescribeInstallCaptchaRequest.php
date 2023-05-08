<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstallCaptchaRequest extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 2020-10-11 16:26:22
     *
     * @var string
     */
    public $deadline;

    /**
     * @description The validity period of the installation verification code. If this parameter is not specified, the validity period is 1 hour.
     *
     * >  The installation verification code is valid only within the validity period. An expired installation verification code cannot be used to install the agent.
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description zh
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'deadline' => 'Deadline',
        'lang'     => 'Lang',
        'sourceIp' => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deadline) {
            $res['Deadline'] = $this->deadline;
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
     * @return DescribeInstallCaptchaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Deadline'])) {
            $model->deadline = $map['Deadline'];
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
