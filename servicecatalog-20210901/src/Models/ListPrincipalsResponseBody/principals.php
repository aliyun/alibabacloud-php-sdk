<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListPrincipalsResponseBody;

use AlibabaCloud\Dara\Model;

class principals extends Model
{
    /**
     * @var string
     */
    public $principalId;

    /**
     * @var string
     */
    public $principalPattern;

    /**
     * @var string
     */
    public $principalType;
    protected $_name = [
        'principalId' => 'PrincipalId',
        'principalPattern' => 'PrincipalPattern',
        'principalType' => 'PrincipalType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->principalId) {
            $res['PrincipalId'] = $this->principalId;
        }

        if (null !== $this->principalPattern) {
            $res['PrincipalPattern'] = $this->principalPattern;
        }

        if (null !== $this->principalType) {
            $res['PrincipalType'] = $this->principalType;
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
        if (isset($map['PrincipalId'])) {
            $model->principalId = $map['PrincipalId'];
        }

        if (isset($map['PrincipalPattern'])) {
            $model->principalPattern = $map['PrincipalPattern'];
        }

        if (isset($map['PrincipalType'])) {
            $model->principalType = $map['PrincipalType'];
        }

        return $model;
    }
}
