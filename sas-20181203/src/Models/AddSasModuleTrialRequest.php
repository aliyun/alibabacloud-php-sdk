<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class AddSasModuleTrialRequest extends Model
{
    /**
     * @description The language of the content within the request and response. Valid values:
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
     * @description The code of the feature. Valid values:
     *
     *   **vulFix**: vulnerability fixing.
     *   **cloudSiem**: threat analysis and response.
     *
     * @example vulFix
     *
     * @var string
     */
    public $moduleCode;
    protected $_name = [
        'lang'       => 'Lang',
        'moduleCode' => 'ModuleCode',
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
        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddSasModuleTrialRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }

        return $model;
    }
}
