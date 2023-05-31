<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeSuspiciousUUIDConfigRequest extends Model
{
    /**
     * @description The type of proactive defense. Valid values:
     *
     *   **auto_breaking**: virus defense
     *   **ransomware_breaking**: ransomware capture
     *   **webshell\_cloud_breaking**: webshell defense
     *   **alinet**: malicious behavior defense
     *   **alisecguard**: client protection
     *
     * @example alinet
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'type' => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSuspiciousUUIDConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
