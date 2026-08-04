<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class AddCustomerLabelRequest extends Model
{
    /**
     * @var string
     */
    public $endtime;

    /**
     * @var string
     */
    public $labelSeries;

    /**
     * @var string[]
     */
    public $labelTypes;

    /**
     * @var string
     */
    public $organization;

    /**
     * @var int
     */
    public $PK;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'endtime' => 'Endtime',
        'labelSeries' => 'LabelSeries',
        'labelTypes' => 'LabelTypes',
        'organization' => 'Organization',
        'PK' => 'PK',
        'startTime' => 'StartTime',
        'token' => 'Token',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        if (\is_array($this->labelTypes)) {
            Model::validateArray($this->labelTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endtime) {
            $res['Endtime'] = $this->endtime;
        }

        if (null !== $this->labelSeries) {
            $res['LabelSeries'] = $this->labelSeries;
        }

        if (null !== $this->labelTypes) {
            if (\is_array($this->labelTypes)) {
                $res['LabelTypes'] = [];
                $n1 = 0;
                foreach ($this->labelTypes as $item1) {
                    $res['LabelTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->organization) {
            $res['Organization'] = $this->organization;
        }

        if (null !== $this->PK) {
            $res['PK'] = $this->PK;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['Endtime'])) {
            $model->endtime = $map['Endtime'];
        }

        if (isset($map['LabelSeries'])) {
            $model->labelSeries = $map['LabelSeries'];
        }

        if (isset($map['LabelTypes'])) {
            if (!empty($map['LabelTypes'])) {
                $model->labelTypes = [];
                $n1 = 0;
                foreach ($map['LabelTypes'] as $item1) {
                    $model->labelTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Organization'])) {
            $model->organization = $map['Organization'];
        }

        if (isset($map['PK'])) {
            $model->PK = $map['PK'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
