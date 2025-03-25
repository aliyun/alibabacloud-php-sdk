<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\CalcBMDAdvanceRequest\URLList;

class CalcBMDAdvanceRequest extends Model
{
    /**
     * @var string
     */
    public $dataFormat;

    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $orgName;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var URLList[]
     */
    public $URLList;
    protected $_name = [
        'dataFormat' => 'DataFormat',
        'orgId' => 'OrgId',
        'orgName' => 'OrgName',
        'sourceType' => 'SourceType',
        'URLList' => 'URLList',
    ];

    public function validate()
    {
        if (\is_array($this->URLList)) {
            Model::validateArray($this->URLList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataFormat) {
            $res['DataFormat'] = $this->dataFormat;
        }

        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }

        if (null !== $this->orgName) {
            $res['OrgName'] = $this->orgName;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->URLList) {
            if (\is_array($this->URLList)) {
                $res['URLList'] = [];
                $n1 = 0;
                foreach ($this->URLList as $item1) {
                    $res['URLList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DataFormat'])) {
            $model->dataFormat = $map['DataFormat'];
        }

        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }

        if (isset($map['OrgName'])) {
            $model->orgName = $map['OrgName'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['URLList'])) {
            if (!empty($map['URLList'])) {
                $model->URLList = [];
                $n1 = 0;
                foreach ($map['URLList'] as $item1) {
                    $model->URLList[$n1++] = URLList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
