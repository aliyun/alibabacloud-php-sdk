<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20260423\Models\QuerySuccessIcpDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Companyreg\V20260423\Models\QuerySuccessIcpDataResponseBody\baSuccessDataWithRiskList\appList;
use AlibabaCloud\SDK\Companyreg\V20260423\Models\QuerySuccessIcpDataResponseBody\baSuccessDataWithRiskList\riskList;
use AlibabaCloud\SDK\Companyreg\V20260423\Models\QuerySuccessIcpDataResponseBody\baSuccessDataWithRiskList\websiteList;

class baSuccessDataWithRiskList extends Model
{
    /**
     * @var appList[]
     */
    public $appList;

    /**
     * @var string
     */
    public $icpNumber;

    /**
     * @var string
     */
    public $organizersName;

    /**
     * @var string
     */
    public $organizersNature;

    /**
     * @var string
     */
    public $responsiblePersonName;

    /**
     * @var riskList[]
     */
    public $riskList;

    /**
     * @var websiteList[]
     */
    public $websiteList;
    protected $_name = [
        'appList' => 'AppList',
        'icpNumber' => 'IcpNumber',
        'organizersName' => 'OrganizersName',
        'organizersNature' => 'OrganizersNature',
        'responsiblePersonName' => 'ResponsiblePersonName',
        'riskList' => 'RiskList',
        'websiteList' => 'WebsiteList',
    ];

    public function validate()
    {
        if (\is_array($this->appList)) {
            Model::validateArray($this->appList);
        }
        if (\is_array($this->riskList)) {
            Model::validateArray($this->riskList);
        }
        if (\is_array($this->websiteList)) {
            Model::validateArray($this->websiteList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appList) {
            if (\is_array($this->appList)) {
                $res['AppList'] = [];
                $n1 = 0;
                foreach ($this->appList as $item1) {
                    $res['AppList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->icpNumber) {
            $res['IcpNumber'] = $this->icpNumber;
        }

        if (null !== $this->organizersName) {
            $res['OrganizersName'] = $this->organizersName;
        }

        if (null !== $this->organizersNature) {
            $res['OrganizersNature'] = $this->organizersNature;
        }

        if (null !== $this->responsiblePersonName) {
            $res['ResponsiblePersonName'] = $this->responsiblePersonName;
        }

        if (null !== $this->riskList) {
            if (\is_array($this->riskList)) {
                $res['RiskList'] = [];
                $n1 = 0;
                foreach ($this->riskList as $item1) {
                    $res['RiskList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->websiteList) {
            if (\is_array($this->websiteList)) {
                $res['WebsiteList'] = [];
                $n1 = 0;
                foreach ($this->websiteList as $item1) {
                    $res['WebsiteList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AppList'])) {
            if (!empty($map['AppList'])) {
                $model->appList = [];
                $n1 = 0;
                foreach ($map['AppList'] as $item1) {
                    $model->appList[$n1] = appList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['IcpNumber'])) {
            $model->icpNumber = $map['IcpNumber'];
        }

        if (isset($map['OrganizersName'])) {
            $model->organizersName = $map['OrganizersName'];
        }

        if (isset($map['OrganizersNature'])) {
            $model->organizersNature = $map['OrganizersNature'];
        }

        if (isset($map['ResponsiblePersonName'])) {
            $model->responsiblePersonName = $map['ResponsiblePersonName'];
        }

        if (isset($map['RiskList'])) {
            if (!empty($map['RiskList'])) {
                $model->riskList = [];
                $n1 = 0;
                foreach ($map['RiskList'] as $item1) {
                    $model->riskList[$n1] = riskList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['WebsiteList'])) {
            if (!empty($map['WebsiteList'])) {
                $model->websiteList = [];
                $n1 = 0;
                foreach ($map['WebsiteList'] as $item1) {
                    $model->websiteList[$n1] = websiteList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
