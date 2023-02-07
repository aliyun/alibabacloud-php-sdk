<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class SaveUserCreditRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $avoidExpiration;

    /**
     * @example true
     *
     * @var bool
     */
    public $avoidNotification;

    /**
     * @example true
     *
     * @var bool
     */
    public $avoidPrepaidExpiration;

    /**
     * @example true
     *
     * @var bool
     */
    public $avoidPrepaidNotification;

    /**
     * @var string
     */
    public $creditType;

    /**
     * @var string
     */
    public $creditValue;

    /**
     * @example description
     *
     * @var string
     */
    public $description;

    /**
     * @example 65683
     *
     * @var string
     */
    public $operator;
    protected $_name = [
        'avoidExpiration'          => 'AvoidExpiration',
        'avoidNotification'        => 'AvoidNotification',
        'avoidPrepaidExpiration'   => 'AvoidPrepaidExpiration',
        'avoidPrepaidNotification' => 'AvoidPrepaidNotification',
        'creditType'               => 'CreditType',
        'creditValue'              => 'CreditValue',
        'description'              => 'Description',
        'operator'                 => 'Operator',
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
        if (null !== $this->avoidNotification) {
            $res['AvoidNotification'] = $this->avoidNotification;
        }
        if (null !== $this->avoidPrepaidExpiration) {
            $res['AvoidPrepaidExpiration'] = $this->avoidPrepaidExpiration;
        }
        if (null !== $this->avoidPrepaidNotification) {
            $res['AvoidPrepaidNotification'] = $this->avoidPrepaidNotification;
        }
        if (null !== $this->creditType) {
            $res['CreditType'] = $this->creditType;
        }
        if (null !== $this->creditValue) {
            $res['CreditValue'] = $this->creditValue;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
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
        if (isset($map['AvoidNotification'])) {
            $model->avoidNotification = $map['AvoidNotification'];
        }
        if (isset($map['AvoidPrepaidExpiration'])) {
            $model->avoidPrepaidExpiration = $map['AvoidPrepaidExpiration'];
        }
        if (isset($map['AvoidPrepaidNotification'])) {
            $model->avoidPrepaidNotification = $map['AvoidPrepaidNotification'];
        }
        if (isset($map['CreditType'])) {
            $model->creditType = $map['CreditType'];
        }
        if (isset($map['CreditValue'])) {
            $model->creditValue = $map['CreditValue'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        return $model;
    }
}
