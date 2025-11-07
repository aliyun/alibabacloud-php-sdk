<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyPersonasSexStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var int
     */
    public $age0To14Cnt;

    /**
     * @var string
     */
    public $age0To14Rate;

    /**
     * @var int
     */
    public $age14To18Cnt;

    /**
     * @var string
     */
    public $age14To18Rate;

    /**
     * @var int
     */
    public $age18To35Cnt;

    /**
     * @var string
     */
    public $age18To35Rate;

    /**
     * @var int
     */
    public $age35To50Cnt;

    /**
     * @var string
     */
    public $age35To50Rate;

    /**
     * @var int
     */
    public $age50To999Cnt;

    /**
     * @var string
     */
    public $age50To999Rate;

    /**
     * @var int
     */
    public $allUserCnt;

    /**
     * @var int
     */
    public $femaleCnt;

    /**
     * @var string
     */
    public $femaleRate;

    /**
     * @var int
     */
    public $maleCnt;

    /**
     * @var string
     */
    public $maleRate;
    protected $_name = [
        'age0To14Cnt' => 'Age0To14Cnt',
        'age0To14Rate' => 'Age0To14Rate',
        'age14To18Cnt' => 'Age14To18Cnt',
        'age14To18Rate' => 'Age14To18Rate',
        'age18To35Cnt' => 'Age18To35Cnt',
        'age18To35Rate' => 'Age18To35Rate',
        'age35To50Cnt' => 'Age35To50Cnt',
        'age35To50Rate' => 'Age35To50Rate',
        'age50To999Cnt' => 'Age50To999Cnt',
        'age50To999Rate' => 'Age50To999Rate',
        'allUserCnt' => 'AllUserCnt',
        'femaleCnt' => 'FemaleCnt',
        'femaleRate' => 'FemaleRate',
        'maleCnt' => 'MaleCnt',
        'maleRate' => 'MaleRate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->age0To14Cnt) {
            $res['Age0To14Cnt'] = $this->age0To14Cnt;
        }

        if (null !== $this->age0To14Rate) {
            $res['Age0To14Rate'] = $this->age0To14Rate;
        }

        if (null !== $this->age14To18Cnt) {
            $res['Age14To18Cnt'] = $this->age14To18Cnt;
        }

        if (null !== $this->age14To18Rate) {
            $res['Age14To18Rate'] = $this->age14To18Rate;
        }

        if (null !== $this->age18To35Cnt) {
            $res['Age18To35Cnt'] = $this->age18To35Cnt;
        }

        if (null !== $this->age18To35Rate) {
            $res['Age18To35Rate'] = $this->age18To35Rate;
        }

        if (null !== $this->age35To50Cnt) {
            $res['Age35To50Cnt'] = $this->age35To50Cnt;
        }

        if (null !== $this->age35To50Rate) {
            $res['Age35To50Rate'] = $this->age35To50Rate;
        }

        if (null !== $this->age50To999Cnt) {
            $res['Age50To999Cnt'] = $this->age50To999Cnt;
        }

        if (null !== $this->age50To999Rate) {
            $res['Age50To999Rate'] = $this->age50To999Rate;
        }

        if (null !== $this->allUserCnt) {
            $res['AllUserCnt'] = $this->allUserCnt;
        }

        if (null !== $this->femaleCnt) {
            $res['FemaleCnt'] = $this->femaleCnt;
        }

        if (null !== $this->femaleRate) {
            $res['FemaleRate'] = $this->femaleRate;
        }

        if (null !== $this->maleCnt) {
            $res['MaleCnt'] = $this->maleCnt;
        }

        if (null !== $this->maleRate) {
            $res['MaleRate'] = $this->maleRate;
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
        if (isset($map['Age0To14Cnt'])) {
            $model->age0To14Cnt = $map['Age0To14Cnt'];
        }

        if (isset($map['Age0To14Rate'])) {
            $model->age0To14Rate = $map['Age0To14Rate'];
        }

        if (isset($map['Age14To18Cnt'])) {
            $model->age14To18Cnt = $map['Age14To18Cnt'];
        }

        if (isset($map['Age14To18Rate'])) {
            $model->age14To18Rate = $map['Age14To18Rate'];
        }

        if (isset($map['Age18To35Cnt'])) {
            $model->age18To35Cnt = $map['Age18To35Cnt'];
        }

        if (isset($map['Age18To35Rate'])) {
            $model->age18To35Rate = $map['Age18To35Rate'];
        }

        if (isset($map['Age35To50Cnt'])) {
            $model->age35To50Cnt = $map['Age35To50Cnt'];
        }

        if (isset($map['Age35To50Rate'])) {
            $model->age35To50Rate = $map['Age35To50Rate'];
        }

        if (isset($map['Age50To999Cnt'])) {
            $model->age50To999Cnt = $map['Age50To999Cnt'];
        }

        if (isset($map['Age50To999Rate'])) {
            $model->age50To999Rate = $map['Age50To999Rate'];
        }

        if (isset($map['AllUserCnt'])) {
            $model->allUserCnt = $map['AllUserCnt'];
        }

        if (isset($map['FemaleCnt'])) {
            $model->femaleCnt = $map['FemaleCnt'];
        }

        if (isset($map['FemaleRate'])) {
            $model->femaleRate = $map['FemaleRate'];
        }

        if (isset($map['MaleCnt'])) {
            $model->maleCnt = $map['MaleCnt'];
        }

        if (isset($map['MaleRate'])) {
            $model->maleRate = $map['MaleRate'];
        }

        return $model;
    }
}
