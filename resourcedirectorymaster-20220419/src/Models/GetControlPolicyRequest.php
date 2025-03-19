<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Tea\Model;

class GetControlPolicyRequest extends Model
{
    /**
     * @description The language in which you want to return the description of the access control policy. Valid values:
     *
     *   zh-CN (default value): Chinese
     *   en: English
     *   ja: Japanese
     *
     * > This parameter is valid only for system access control policies.
     *
     * @example zh-CN
     *
     * @var string
     */
    public $language;

    /**
     * @description The ID of the access control policy.
     *
     * This parameter is required.
     *
     * @example cp-SImPt8GCEwiq****
     *
     * @var string
     */
    public $policyId;
    protected $_name = [
        'language' => 'Language',
        'policyId' => 'PolicyId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetControlPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        return $model;
    }
}
