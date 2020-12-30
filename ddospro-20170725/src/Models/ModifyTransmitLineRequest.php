<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models;

use AlibabaCloud\Tea\Model;

class ModifyTransmitLineRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string[]
     */
    public $ips;
    protected $_name = [
        'sourceIp' => 'SourceIp',
        'lang'     => 'Lang',
        'domain'   => 'Domain',
        'ips'      => 'Ips',
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->ips) {
            $res['Ips'] = $this->ips;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyTransmitLineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Ips'])) {
            if (!empty($map['Ips'])) {
                $model->ips = $map['Ips'];
            }
        }

        return $model;
    }
}
