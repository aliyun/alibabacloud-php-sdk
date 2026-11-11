<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class SubmitImageRequest extends Model
{
    /**
     * @var string[]
     */
    public $destinationRegionList;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'destinationRegionList' => 'DestinationRegionList',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (\is_array($this->destinationRegionList)) {
            Model::validateArray($this->destinationRegionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destinationRegionList) {
            if (\is_array($this->destinationRegionList)) {
                $res['DestinationRegionList'] = [];
                $n1 = 0;
                foreach ($this->destinationRegionList as $item1) {
                    $res['DestinationRegionList'][$n1] = $item1;
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
        if (isset($map['DestinationRegionList'])) {
            if (!empty($map['DestinationRegionList'])) {
                $model->destinationRegionList = [];
                $n1 = 0;
                foreach ($map['DestinationRegionList'] as $item1) {
                    $model->destinationRegionList[$n1] = $item1;
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
