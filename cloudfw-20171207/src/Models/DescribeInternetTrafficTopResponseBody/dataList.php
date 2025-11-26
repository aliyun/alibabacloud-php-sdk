<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInternetTrafficTopResponseBody;

use AlibabaCloud\Dara\Model;

class dataList extends Model
{
    /**
     * @var string
     */
    public $dataName;

    /**
     * @var string
     */
    public $dataValue;

    /**
     * @var bool
     */
    public $isSubscribed;

    /**
     * @var string[]
     */
    public $labelList;

    /**
     * @var int
     */
    public $sessionCount;

    /**
     * @var int
     */
    public $totalBytes;
    protected $_name = [
        'dataName' => 'DataName',
        'dataValue' => 'DataValue',
        'isSubscribed' => 'IsSubscribed',
        'labelList' => 'LabelList',
        'sessionCount' => 'SessionCount',
        'totalBytes' => 'TotalBytes',
    ];

    public function validate()
    {
        if (\is_array($this->labelList)) {
            Model::validateArray($this->labelList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataName) {
            $res['DataName'] = $this->dataName;
        }

        if (null !== $this->dataValue) {
            $res['DataValue'] = $this->dataValue;
        }

        if (null !== $this->isSubscribed) {
            $res['IsSubscribed'] = $this->isSubscribed;
        }

        if (null !== $this->labelList) {
            if (\is_array($this->labelList)) {
                $res['LabelList'] = [];
                $n1 = 0;
                foreach ($this->labelList as $item1) {
                    $res['LabelList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sessionCount) {
            $res['SessionCount'] = $this->sessionCount;
        }

        if (null !== $this->totalBytes) {
            $res['TotalBytes'] = $this->totalBytes;
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
        if (isset($map['DataName'])) {
            $model->dataName = $map['DataName'];
        }

        if (isset($map['DataValue'])) {
            $model->dataValue = $map['DataValue'];
        }

        if (isset($map['IsSubscribed'])) {
            $model->isSubscribed = $map['IsSubscribed'];
        }

        if (isset($map['LabelList'])) {
            if (!empty($map['LabelList'])) {
                $model->labelList = [];
                $n1 = 0;
                foreach ($map['LabelList'] as $item1) {
                    $model->labelList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SessionCount'])) {
            $model->sessionCount = $map['SessionCount'];
        }

        if (isset($map['TotalBytes'])) {
            $model->totalBytes = $map['TotalBytes'];
        }

        return $model;
    }
}
