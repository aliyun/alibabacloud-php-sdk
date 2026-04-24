<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20260423\Models\QuerySuccessIcpDataResponseBody\baSuccessDataWithRiskList;

use AlibabaCloud\Dara\Model;

class websiteList extends Model
{
    /**
     * @var string[]
     */
    public $domainList;

    /**
     * @var string
     */
    public $responsiblePersonName;

    /**
     * @var string
     */
    public $siteName;

    /**
     * @var string
     */
    public $siteRecordNum;
    protected $_name = [
        'domainList' => 'DomainList',
        'responsiblePersonName' => 'ResponsiblePersonName',
        'siteName' => 'SiteName',
        'siteRecordNum' => 'SiteRecordNum',
    ];

    public function validate()
    {
        if (\is_array($this->domainList)) {
            Model::validateArray($this->domainList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainList) {
            if (\is_array($this->domainList)) {
                $res['DomainList'] = [];
                $n1 = 0;
                foreach ($this->domainList as $item1) {
                    $res['DomainList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->responsiblePersonName) {
            $res['ResponsiblePersonName'] = $this->responsiblePersonName;
        }

        if (null !== $this->siteName) {
            $res['SiteName'] = $this->siteName;
        }

        if (null !== $this->siteRecordNum) {
            $res['SiteRecordNum'] = $this->siteRecordNum;
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
        if (isset($map['DomainList'])) {
            if (!empty($map['DomainList'])) {
                $model->domainList = [];
                $n1 = 0;
                foreach ($map['DomainList'] as $item1) {
                    $model->domainList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ResponsiblePersonName'])) {
            $model->responsiblePersonName = $map['ResponsiblePersonName'];
        }

        if (isset($map['SiteName'])) {
            $model->siteName = $map['SiteName'];
        }

        if (isset($map['SiteRecordNum'])) {
            $model->siteRecordNum = $map['SiteRecordNum'];
        }

        return $model;
    }
}
