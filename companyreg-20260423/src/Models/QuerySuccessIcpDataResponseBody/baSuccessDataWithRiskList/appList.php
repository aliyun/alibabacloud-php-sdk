<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20260423\Models\QuerySuccessIcpDataResponseBody\baSuccessDataWithRiskList;

use AlibabaCloud\Dara\Model;

class appList extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appRecordNum;

    /**
     * @var string[]
     */
    public $domainList;

    /**
     * @var string
     */
    public $responsiblePersonName;
    protected $_name = [
        'appName' => 'AppName',
        'appRecordNum' => 'AppRecordNum',
        'domainList' => 'DomainList',
        'responsiblePersonName' => 'ResponsiblePersonName',
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
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->appRecordNum) {
            $res['AppRecordNum'] = $this->appRecordNum;
        }

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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AppRecordNum'])) {
            $model->appRecordNum = $map['AppRecordNum'];
        }

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

        return $model;
    }
}
