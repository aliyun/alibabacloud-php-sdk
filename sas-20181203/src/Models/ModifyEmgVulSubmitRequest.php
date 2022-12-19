<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyEmgVulSubmitRequest extends Model
{
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
     * @description The name of the vulnerability.
     *
     * @example scan:ASCV-2019-032401
     *
     * @var string
     */
    public $name;

    /**
     * @description Specifies whether to scan for urgent vulnerabilities. Valid values:
     *
     *   **yes**
     *   **no**
     *
     * @example yes
     *
     * @var string
     */
    public $userAgreement;
    protected $_name = [
        'lang'          => 'Lang',
        'name'          => 'Name',
        'userAgreement' => 'UserAgreement',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->userAgreement) {
            $res['UserAgreement'] = $this->userAgreement;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyEmgVulSubmitRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['UserAgreement'])) {
            $model->userAgreement = $map['UserAgreement'];
        }

        return $model;
    }
}
