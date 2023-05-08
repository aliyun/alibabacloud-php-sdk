<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpdateHoneypotRequest extends Model
{
    /**
     * @example 945607c2ae2a1a737c04599d6608065688bfc6048d9b9d306ce8dc8191c278b4
     *
     * @var string
     */
    public $honeypotId;

    /**
     * @example ExtMail
     *
     * @var string
     */
    public $honeypotName;

    /**
     * @var string
     */
    public $lang;

    /**
     * @example {\"burp\":\"open\",\"webshell\":\"open\",\"trojan_git\":\"close\",\"portrait_option\":\"true\"}
     *
     * @var string
     */
    public $meta;
    protected $_name = [
        'honeypotId'   => 'HoneypotId',
        'honeypotName' => 'HoneypotName',
        'lang'         => 'Lang',
        'meta'         => 'Meta',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->honeypotId) {
            $res['HoneypotId'] = $this->honeypotId;
        }
        if (null !== $this->honeypotName) {
            $res['HoneypotName'] = $this->honeypotName;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->meta) {
            $res['Meta'] = $this->meta;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateHoneypotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HoneypotId'])) {
            $model->honeypotId = $map['HoneypotId'];
        }
        if (isset($map['HoneypotName'])) {
            $model->honeypotName = $map['HoneypotName'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Meta'])) {
            $model->meta = $map['Meta'];
        }

        return $model;
    }
}
