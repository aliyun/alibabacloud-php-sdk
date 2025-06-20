<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\QueryRegionAzResponseBody\data;

use AlibabaCloud\Dara\Model;

class dataInfo extends Model
{
    /**
     * @var string[]
     */
    public $azList;

    /**
     * @var string
     */
    public $regionCode;

    /**
     * @var string
     */
    public $regionName;
    protected $_name = [
        'azList' => 'AzList',
        'regionCode' => 'RegionCode',
        'regionName' => 'RegionName',
    ];

    public function validate()
    {
        if (\is_array($this->azList)) {
            Model::validateArray($this->azList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->azList) {
            if (\is_array($this->azList)) {
                $res['AzList'] = [];
                $n1 = 0;
                foreach ($this->azList as $item1) {
                    $res['AzList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionCode) {
            $res['RegionCode'] = $this->regionCode;
        }

        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
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
        if (isset($map['AzList'])) {
            if (!empty($map['AzList'])) {
                $model->azList = [];
                $n1 = 0;
                foreach ($map['AzList'] as $item1) {
                    $model->azList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionCode'])) {
            $model->regionCode = $map['RegionCode'];
        }

        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }

        return $model;
    }
}
