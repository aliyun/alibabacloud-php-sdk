<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GrantSwitchAgreementRequest extends Model
{
    /**
     * @description Indicates whether to agree to migrate the client connections from overseas servers to the Singapore center.
     *
     * @example true
     *
     * @var bool
     */
    public $isAgree;

    /**
     * @description The language type for requests and responses. The default value is **zh**. Possible values:
     *
     * - **zh**: Chinese
     * - **en**: English
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description Switching type. Possible values:
     *
     * - **sg_switch**: Migrate client connections from overseas servers to Singapore
     * @example sg_switch
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'isAgree' => 'IsAgree',
        'lang'    => 'Lang',
        'type'    => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isAgree) {
            $res['IsAgree'] = $this->isAgree;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrantSwitchAgreementRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsAgree'])) {
            $model->isAgree = $map['IsAgree'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
