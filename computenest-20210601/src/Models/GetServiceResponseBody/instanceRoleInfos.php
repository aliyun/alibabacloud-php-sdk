<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceResponseBody;

use AlibabaCloud\Dara\Model;

class instanceRoleInfos extends Model
{
    /**
     * @var string
     */
    public $policyDocument;
    /**
     * @var string[]
     */
    public $principals;
    /**
     * @var string
     */
    public $roleName;
    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'policyDocument' => 'PolicyDocument',
        'principals'     => 'Principals',
        'roleName'       => 'RoleName',
        'templateName'   => 'TemplateName',
    ];

    public function validate()
    {
        if (\is_array($this->principals)) {
            Model::validateArray($this->principals);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->policyDocument) {
            $res['PolicyDocument'] = $this->policyDocument;
        }

        if (null !== $this->principals) {
            if (\is_array($this->principals)) {
                $res['Principals'] = [];
                $n1                = 0;
                foreach ($this->principals as $item1) {
                    $res['Principals'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyDocument'])) {
            $model->policyDocument = $map['PolicyDocument'];
        }

        if (isset($map['Principals'])) {
            if (!empty($map['Principals'])) {
                $model->principals = [];
                $n1                = 0;
                foreach ($map['Principals'] as $item1) {
                    $model->principals[$n1++] = $item1;
                }
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
