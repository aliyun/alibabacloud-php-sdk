<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListCustomCallTaggingResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListCustomCallTaggingResponseBody\data\list_\callTagList;

class list_ extends Model
{
    /**
     * @var callTagList[]
     */
    public $callTagList;
    /**
     * @var string
     */
    public $creator;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $number;
    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'callTagList' => 'CallTagList',
        'creator'     => 'Creator',
        'description' => 'Description',
        'instanceId'  => 'InstanceId',
        'number'      => 'Number',
        'updateTime'  => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->callTagList)) {
            Model::validateArray($this->callTagList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callTagList) {
            if (\is_array($this->callTagList)) {
                $res['CallTagList'] = [];
                $n1                 = 0;
                foreach ($this->callTagList as $item1) {
                    $res['CallTagList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CallTagList'])) {
            if (!empty($map['CallTagList'])) {
                $model->callTagList = [];
                $n1                 = 0;
                foreach ($map['CallTagList'] as $item1) {
                    $model->callTagList[$n1++] = callTagList::fromMap($item1);
                }
            }
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
