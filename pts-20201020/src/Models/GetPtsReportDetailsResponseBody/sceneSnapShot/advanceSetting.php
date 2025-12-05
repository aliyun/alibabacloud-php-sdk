<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsResponseBody\sceneSnapShot;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsResponseBody\sceneSnapShot\advanceSetting\domainBindingList;

class advanceSetting extends Model
{
    /**
     * @var int
     */
    public $connectionTimeoutInSecond;

    /**
     * @var domainBindingList[]
     */
    public $domainBindingList;

    /**
     * @var int
     */
    public $logRate;

    /**
     * @var string
     */
    public $successCode;
    protected $_name = [
        'connectionTimeoutInSecond' => 'ConnectionTimeoutInSecond',
        'domainBindingList' => 'DomainBindingList',
        'logRate' => 'LogRate',
        'successCode' => 'SuccessCode',
    ];

    public function validate()
    {
        if (\is_array($this->domainBindingList)) {
            Model::validateArray($this->domainBindingList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionTimeoutInSecond) {
            $res['ConnectionTimeoutInSecond'] = $this->connectionTimeoutInSecond;
        }

        if (null !== $this->domainBindingList) {
            if (\is_array($this->domainBindingList)) {
                $res['DomainBindingList'] = [];
                $n1 = 0;
                foreach ($this->domainBindingList as $item1) {
                    $res['DomainBindingList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->logRate) {
            $res['LogRate'] = $this->logRate;
        }

        if (null !== $this->successCode) {
            $res['SuccessCode'] = $this->successCode;
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
        if (isset($map['ConnectionTimeoutInSecond'])) {
            $model->connectionTimeoutInSecond = $map['ConnectionTimeoutInSecond'];
        }

        if (isset($map['DomainBindingList'])) {
            if (!empty($map['DomainBindingList'])) {
                $model->domainBindingList = [];
                $n1 = 0;
                foreach ($map['DomainBindingList'] as $item1) {
                    $model->domainBindingList[$n1] = domainBindingList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['LogRate'])) {
            $model->logRate = $map['LogRate'];
        }

        if (isset($map['SuccessCode'])) {
            $model->successCode = $map['SuccessCode'];
        }

        return $model;
    }
}
