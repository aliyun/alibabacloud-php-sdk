<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsResponseBody\sceneSnapShot;

use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsResponseBody\sceneSnapShot\advanceSetting\domainBindingList;
use AlibabaCloud\Tea\Model;

class advanceSetting extends Model
{
    /**
     * @example 5
     *
     * @var int
     */
    public $connectionTimeoutInSecond;

    /**
     * @var domainBindingList[]
     */
    public $domainBindingList;

    /**
     * @example 1
     *
     * @var int
     */
    public $logRate;

    /**
     * @example 429,404
     *
     * @var string
     */
    public $successCode;
    protected $_name = [
        'connectionTimeoutInSecond' => 'ConnectionTimeoutInSecond',
        'domainBindingList'         => 'DomainBindingList',
        'logRate'                   => 'LogRate',
        'successCode'               => 'SuccessCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionTimeoutInSecond) {
            $res['ConnectionTimeoutInSecond'] = $this->connectionTimeoutInSecond;
        }
        if (null !== $this->domainBindingList) {
            $res['DomainBindingList'] = [];
            if (null !== $this->domainBindingList && \is_array($this->domainBindingList)) {
                $n = 0;
                foreach ($this->domainBindingList as $item) {
                    $res['DomainBindingList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return advanceSetting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionTimeoutInSecond'])) {
            $model->connectionTimeoutInSecond = $map['ConnectionTimeoutInSecond'];
        }
        if (isset($map['DomainBindingList'])) {
            if (!empty($map['DomainBindingList'])) {
                $model->domainBindingList = [];
                $n                        = 0;
                foreach ($map['DomainBindingList'] as $item) {
                    $model->domainBindingList[$n++] = null !== $item ? domainBindingList::fromMap($item) : $item;
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
