<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeBatchSlsDispatchStatusResponseBody\itemList;

class DescribeBatchSlsDispatchStatusResponseBody extends Model
{
    /**
     * @var itemList[]
     */
    public $itemList;

    /**
     * @var string
     */
    public $logstoreName;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'itemList' => 'ItemList',
        'logstoreName' => 'LogstoreName',
        'projectName' => 'ProjectName',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->itemList)) {
            Model::validateArray($this->itemList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->itemList) {
            if (\is_array($this->itemList)) {
                $res['ItemList'] = [];
                $n1 = 0;
                foreach ($this->itemList as $item1) {
                    $res['ItemList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->logstoreName) {
            $res['LogstoreName'] = $this->logstoreName;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ItemList'])) {
            if (!empty($map['ItemList'])) {
                $model->itemList = [];
                $n1 = 0;
                foreach ($map['ItemList'] as $item1) {
                    $model->itemList[$n1] = itemList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['LogstoreName'])) {
            $model->logstoreName = $map['LogstoreName'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
