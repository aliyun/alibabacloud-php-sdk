<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeCnameReusesResponseBody;

use AlibabaCloud\Tea\Model;

class cnameReuses extends Model
{
    /**
     * @example 4o6ep6q217k9****.aliyunddos0004.com
     *
     * @var string
     */
    public $cname;

    /**
     * @example www.aliyun.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example 1
     *
     * @var int
     */
    public $enable;
    protected $_name = [
        'cname'  => 'Cname',
        'domain' => 'Domain',
        'enable' => 'Enable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
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
     * @return cnameReuses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        return $model;
    }
}
