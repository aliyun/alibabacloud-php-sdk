<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyDetailResponseBody\strategy\riskTypeWhiteListQueryResultList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyDetailResponseBody\strategy\riskTypeWhiteListQueryResultList\subTypes\checkDetails;

class subTypes extends Model
{
    /**
     * @var string
     */
    public $alias;
    /**
     * @var checkDetails[]
     */
    public $checkDetails;
    /**
     * @var bool
     */
    public $on;
    /**
     * @var string
     */
    public $supportedOs;
    /**
     * @var string
     */
    public $typeName;
    protected $_name = [
        'alias'        => 'Alias',
        'checkDetails' => 'CheckDetails',
        'on'           => 'On',
        'supportedOs'  => 'SupportedOs',
        'typeName'     => 'TypeName',
    ];

    public function validate()
    {
        if (\is_array($this->checkDetails)) {
            Model::validateArray($this->checkDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }

        if (null !== $this->checkDetails) {
            if (\is_array($this->checkDetails)) {
                $res['CheckDetails'] = [];
                $n1                  = 0;
                foreach ($this->checkDetails as $item1) {
                    $res['CheckDetails'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->on) {
            $res['On'] = $this->on;
        }

        if (null !== $this->supportedOs) {
            $res['SupportedOs'] = $this->supportedOs;
        }

        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
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
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }

        if (isset($map['CheckDetails'])) {
            if (!empty($map['CheckDetails'])) {
                $model->checkDetails = [];
                $n1                  = 0;
                foreach ($map['CheckDetails'] as $item1) {
                    $model->checkDetails[$n1++] = checkDetails::fromMap($item1);
                }
            }
        }

        if (isset($map['On'])) {
            $model->on = $map['On'];
        }

        if (isset($map['SupportedOs'])) {
            $model->supportedOs = $map['SupportedOs'];
        }

        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }

        return $model;
    }
}
