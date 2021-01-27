<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class SaveUserCreditRequest extends Model
{
    /**
     * @var bool
     */
    public $avoidExpiration;

    /**
     * @var bool
     */
    public $avoidPrepaidNotification;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $avoidNotification;

    /**
     * @var string
     */
    public $creditValue;

    /**
     * @var bool
     */
    public $avoidPrepaidExpiration;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $creditType;
    protected $_name = [
        'avoidExpiration'          => 'AvoidExpiration',
        'avoidPrepaidNotification' => 'AvoidPrepaidNotification',
        'description'              => 'Description',
        'avoidNotification'        => 'AvoidNotification',
        'creditValue'              => 'CreditValue',
        'avoidPrepaidExpiration'   => 'AvoidPrepaidExpiration',
        'operator'                 => 'Operator',
        'creditType'               => 'CreditType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avoidExpiration) {
            $res['AvoidExpiration'] = $this->avoidExpiration;
        }
        if (null !== $this->avoidPrepaidNotification) {
            $res['AvoidPrepaidNotification'] = $this->avoidPrepaidNotification;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->avoidNotification) {
            $res['AvoidNotification'] = $this->avoidNotification;
        }
        if (null !== $this->creditValue) {
            $res['CreditValue'] = $this->creditValue;
        }
        if (null !== $this->avoidPrepaidExpiration) {
            $res['AvoidPrepaidExpiration'] = $this->avoidPrepaidExpiration;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->creditType) {
            $res['CreditType'] = $this->creditType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveUserCreditRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvoidExpiration'])) {
            $model->avoidExpiration = $map['AvoidExpiration'];
        }
        if (isset($map['AvoidPrepaidNotification'])) {
            $model->avoidPrepaidNotification = $map['AvoidPrepaidNotification'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AvoidNotification'])) {
            $model->avoidNotification = $map['AvoidNotification'];
        }
        if (isset($map['CreditValue'])) {
            $model->creditValue = $map['CreditValue'];
        }
        if (isset($map['AvoidPrepaidExpiration'])) {
            $model->avoidPrepaidExpiration = $map['AvoidPrepaidExpiration'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['CreditType'])) {
            $model->creditType = $map['CreditType'];
        }

        return $model;
    }
}
