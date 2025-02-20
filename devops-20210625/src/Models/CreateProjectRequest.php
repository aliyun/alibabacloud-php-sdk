<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class CreateProjectRequest extends Model
{
    /**
     * @var string
     */
    public $customCode;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $scope;
    /**
     * @var string
     */
    public $templateIdentifier;
    protected $_name = [
        'customCode'         => 'customCode',
        'name'               => 'name',
        'scope'              => 'scope',
        'templateIdentifier' => 'templateIdentifier',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customCode) {
            $res['customCode'] = $this->customCode;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }

        if (null !== $this->templateIdentifier) {
            $res['templateIdentifier'] = $this->templateIdentifier;
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
        if (isset($map['customCode'])) {
            $model->customCode = $map['customCode'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }

        if (isset($map['templateIdentifier'])) {
            $model->templateIdentifier = $map['templateIdentifier'];
        }

        return $model;
    }
}
