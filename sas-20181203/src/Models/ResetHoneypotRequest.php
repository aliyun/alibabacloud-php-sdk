<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ResetHoneypotRequest extends Model
{
    /**
     * @description The ID of the honeypot.
     *
     * > You can call the [ListHoneypot](~~ListHoneypot~~) operation to query the IDs of honeypots.
     * @example 945607c2ae2a1a737c04599d6608065688bfc6048d9b9d306ce8dc8191c*****
     *
     * @var string
     */
    public $honeypotId;

    /**
     * @description The language of the content within the request and response. Valid values:
     * - **zh**: Chinese
     * - **en**: English
     * @example zh
     *
     * @var string
     */
    public $lang;
    protected $_name = [
        'honeypotId' => 'HoneypotId',
        'lang'       => 'Lang',
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResetHoneypotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HoneypotId'])) {
            $model->honeypotId = $map['HoneypotId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
