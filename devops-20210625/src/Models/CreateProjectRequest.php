<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class CreateProjectRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ABCD
     *
     * @var string
     */
    public $customCode;

    /**
     * @description This parameter is required.
     *
     * @example name
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example public
     *
     * @var string
     */
    public $scope;

    /**
     * @description This parameter is required.
     *
     * @example 704eaxxxx5efede61xxx5
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateProjectRequest
     */
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
