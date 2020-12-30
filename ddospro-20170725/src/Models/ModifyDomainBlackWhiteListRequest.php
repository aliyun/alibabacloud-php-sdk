<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models;

use AlibabaCloud\Tea\Model;

class ModifyDomainBlackWhiteListRequest extends Model
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
    public $black;

    /**
     * @var string[]
     */
    public $white;
    protected $_name = [
        'sourceIp' => 'SourceIp',
        'lang'     => 'Lang',
        'domain'   => 'Domain',
        'black'    => 'Black',
        'white'    => 'White',
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
        if (null !== $this->black) {
            $res['Black'] = $this->black;
        }
        if (null !== $this->white) {
            $res['White'] = $this->white;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDomainBlackWhiteListRequest
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
        if (isset($map['Black'])) {
            if (!empty($map['Black'])) {
                $model->black = $map['Black'];
            }
        }
        if (isset($map['White'])) {
            if (!empty($map['White'])) {
                $model->white = $map['White'];
            }
        }

        return $model;
    }
}
