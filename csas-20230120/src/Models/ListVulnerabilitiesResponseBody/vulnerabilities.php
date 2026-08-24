<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListVulnerabilitiesResponseBody;

use AlibabaCloud\Dara\Model;

class vulnerabilities extends Model
{
    /**
     * @var string[]
     */
    public $cveList;

    /**
     * @var string
     */
    public $descriptionEn;

    /**
     * @var string
     */
    public $descriptionZh;

    /**
     * @var string[]
     */
    public $kbs;

    /**
     * @var string
     */
    public $product;

    /**
     * @var int
     */
    public $releaseTime;

    /**
     * @var string
     */
    public $titleEn;

    /**
     * @var string
     */
    public $titleZh;

    /**
     * @var string
     */
    public $updateId;

    /**
     * @var int
     */
    public $vulDeviceCount;

    /**
     * @var string
     */
    public $vulLevel;

    /**
     * @var string
     */
    public $vulType;
    protected $_name = [
        'cveList' => 'CveList',
        'descriptionEn' => 'DescriptionEn',
        'descriptionZh' => 'DescriptionZh',
        'kbs' => 'Kbs',
        'product' => 'Product',
        'releaseTime' => 'ReleaseTime',
        'titleEn' => 'TitleEn',
        'titleZh' => 'TitleZh',
        'updateId' => 'UpdateId',
        'vulDeviceCount' => 'VulDeviceCount',
        'vulLevel' => 'VulLevel',
        'vulType' => 'VulType',
    ];

    public function validate()
    {
        if (\is_array($this->cveList)) {
            Model::validateArray($this->cveList);
        }
        if (\is_array($this->kbs)) {
            Model::validateArray($this->kbs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cveList) {
            if (\is_array($this->cveList)) {
                $res['CveList'] = [];
                $n1 = 0;
                foreach ($this->cveList as $item1) {
                    $res['CveList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->descriptionEn) {
            $res['DescriptionEn'] = $this->descriptionEn;
        }

        if (null !== $this->descriptionZh) {
            $res['DescriptionZh'] = $this->descriptionZh;
        }

        if (null !== $this->kbs) {
            if (\is_array($this->kbs)) {
                $res['Kbs'] = [];
                $n1 = 0;
                foreach ($this->kbs as $item1) {
                    $res['Kbs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
        }

        if (null !== $this->titleEn) {
            $res['TitleEn'] = $this->titleEn;
        }

        if (null !== $this->titleZh) {
            $res['TitleZh'] = $this->titleZh;
        }

        if (null !== $this->updateId) {
            $res['UpdateId'] = $this->updateId;
        }

        if (null !== $this->vulDeviceCount) {
            $res['VulDeviceCount'] = $this->vulDeviceCount;
        }

        if (null !== $this->vulLevel) {
            $res['VulLevel'] = $this->vulLevel;
        }

        if (null !== $this->vulType) {
            $res['VulType'] = $this->vulType;
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
        if (isset($map['CveList'])) {
            if (!empty($map['CveList'])) {
                $model->cveList = [];
                $n1 = 0;
                foreach ($map['CveList'] as $item1) {
                    $model->cveList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DescriptionEn'])) {
            $model->descriptionEn = $map['DescriptionEn'];
        }

        if (isset($map['DescriptionZh'])) {
            $model->descriptionZh = $map['DescriptionZh'];
        }

        if (isset($map['Kbs'])) {
            if (!empty($map['Kbs'])) {
                $model->kbs = [];
                $n1 = 0;
                foreach ($map['Kbs'] as $item1) {
                    $model->kbs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }

        if (isset($map['TitleEn'])) {
            $model->titleEn = $map['TitleEn'];
        }

        if (isset($map['TitleZh'])) {
            $model->titleZh = $map['TitleZh'];
        }

        if (isset($map['UpdateId'])) {
            $model->updateId = $map['UpdateId'];
        }

        if (isset($map['VulDeviceCount'])) {
            $model->vulDeviceCount = $map['VulDeviceCount'];
        }

        if (isset($map['VulLevel'])) {
            $model->vulLevel = $map['VulLevel'];
        }

        if (isset($map['VulType'])) {
            $model->vulType = $map['VulType'];
        }

        return $model;
    }
}
