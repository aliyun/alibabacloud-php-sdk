<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpdateHoneypotRequest extends Model
{
    /**
     * @description The ID of the honeypot.
     *
     * This parameter is required.
     * @example 945607c2ae2a1a737c04599d6608065688bfc6048d9b9d306ce8dc8191c278b4
     *
     * @var string
     */
    public $honeypotId;

    /**
     * @description The custom name of the honeypot.
     *
     * @example ExtMail
     *
     * @var string
     */
    public $honeypotName;

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
     * @description The custom configuration of the honeypot.
     *
     * > You can call the [ListAvailableHoneypot](~~ListAvailableHoneypot~~) operation to query the configurations of honeypots from the **Template** response parameter.
     * @example {\\"burp\\":\\"open\\",\\"webshell\\":\\"open\\",\\"trojan_git\\":\\"close\\",\\"portrait_option\\":\\"true\\"}
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
