<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanImageResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanImageResponseBody\data\results\subResults;

class results extends Model
{
    /**
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var subResults[]
     */
    public $subResults;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'dataId' => 'DataId',
        'imageURL' => 'ImageURL',
        'subResults' => 'SubResults',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (\is_array($this->subResults)) {
            Model::validateArray($this->subResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }

        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }

        if (null !== $this->subResults) {
            if (\is_array($this->subResults)) {
                $res['SubResults'] = [];
                $n1 = 0;
                foreach ($this->subResults as $item1) {
                    $res['SubResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }

        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }

        if (isset($map['SubResults'])) {
            if (!empty($map['SubResults'])) {
                $model->subResults = [];
                $n1 = 0;
                foreach ($map['SubResults'] as $item1) {
                    $model->subResults[$n1] = subResults::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
