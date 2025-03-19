<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceResponseBody;

use AlibabaCloud\Tea\Model;

class instanceRoleInfos extends Model
{
    /**
     * @description The content of the policy.
     *
     * @example {\\n  \\"Version\\": \\"1\\",\\n  \\"Statement\\": [\\n    {\\n      \\"Effect\\": \\"Allow\\",\\n      \\"Action\\": \\"*\\",\\n      \\"Principal\\": \\"*\\",\\n      \\"Resource\\": \\"*\\"\\n    }\\n  ]\\n}
     *
     * @var string
     */
    public $policyDocument;

    /**
     * @description The information of the RAM entity.
     *
     * @var string[]
     */
    public $principals;

    /**
     * @description The ram role name.
     *
     * @example ram-for-dts
     *
     * @var string
     */
    public $roleName;

    /**
     * @description The template name.
     *
     * @example Template one.
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'policyDocument' => 'PolicyDocument',
        'principals' => 'Principals',
        'roleName' => 'RoleName',
        'templateName' => 'TemplateName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyDocument) {
            $res['PolicyDocument'] = $this->policyDocument;
        }
        if (null !== $this->principals) {
            $res['Principals'] = $this->principals;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceRoleInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyDocument'])) {
            $model->policyDocument = $map['PolicyDocument'];
        }
        if (isset($map['Principals'])) {
            if (!empty($map['Principals'])) {
                $model->principals = $map['Principals'];
            }
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
