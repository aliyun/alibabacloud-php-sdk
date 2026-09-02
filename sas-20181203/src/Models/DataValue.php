<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DataValue extends Model
{
    /**
     * @var int
     */
    public $cveNum;

    /**
     * @var int
     */
    public $emgNum;

    /**
     * @var int
     */
    public $sysNum;

    /**
     * @var int
     */
    public $cmsNum;

    /**
     * @var int
     */
    public $appNum;

    /**
     * @var int
     */
    public $scaNum;

    /**
     * @var int
     */
    public $vulAsapSum;

    /**
     * @var int
     */
    public $vulLaterSum;

    /**
     * @var int
     */
    public $vulNntfSum;

    /**
     * @var int
     */
    public $sysAsapNum;
    protected $_name = [
        'cveNum' => 'CveNum',
        'emgNum' => 'EmgNum',
        'sysNum' => 'SysNum',
        'cmsNum' => 'CmsNum',
        'appNum' => 'AppNum',
        'scaNum' => 'ScaNum',
        'vulAsapSum' => 'VulAsapSum',
        'vulLaterSum' => 'VulLaterSum',
        'vulNntfSum' => 'VulNntfSum',
        'sysAsapNum' => 'SysAsapNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cveNum) {
            $res['CveNum'] = $this->cveNum;
        }

        if (null !== $this->emgNum) {
            $res['EmgNum'] = $this->emgNum;
        }

        if (null !== $this->sysNum) {
            $res['SysNum'] = $this->sysNum;
        }

        if (null !== $this->cmsNum) {
            $res['CmsNum'] = $this->cmsNum;
        }

        if (null !== $this->appNum) {
            $res['AppNum'] = $this->appNum;
        }

        if (null !== $this->scaNum) {
            $res['ScaNum'] = $this->scaNum;
        }

        if (null !== $this->vulAsapSum) {
            $res['VulAsapSum'] = $this->vulAsapSum;
        }

        if (null !== $this->vulLaterSum) {
            $res['VulLaterSum'] = $this->vulLaterSum;
        }

        if (null !== $this->vulNntfSum) {
            $res['VulNntfSum'] = $this->vulNntfSum;
        }

        if (null !== $this->sysAsapNum) {
            $res['SysAsapNum'] = $this->sysAsapNum;
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
        if (isset($map['CveNum'])) {
            $model->cveNum = $map['CveNum'];
        }

        if (isset($map['EmgNum'])) {
            $model->emgNum = $map['EmgNum'];
        }

        if (isset($map['SysNum'])) {
            $model->sysNum = $map['SysNum'];
        }

        if (isset($map['CmsNum'])) {
            $model->cmsNum = $map['CmsNum'];
        }

        if (isset($map['AppNum'])) {
            $model->appNum = $map['AppNum'];
        }

        if (isset($map['ScaNum'])) {
            $model->scaNum = $map['ScaNum'];
        }

        if (isset($map['VulAsapSum'])) {
            $model->vulAsapSum = $map['VulAsapSum'];
        }

        if (isset($map['VulLaterSum'])) {
            $model->vulLaterSum = $map['VulLaterSum'];
        }

        if (isset($map['VulNntfSum'])) {
            $model->vulNntfSum = $map['VulNntfSum'];
        }

        if (isset($map['SysAsapNum'])) {
            $model->sysAsapNum = $map['SysAsapNum'];
        }

        return $model;
    }
}
