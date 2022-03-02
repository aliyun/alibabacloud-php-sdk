<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListCustomCallTaggingResponseBody\data;

use AlibabaCloud\SDK\CCC\V20200701\Models\ListCustomCallTaggingResponseBody\data\list_\callTagList;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callTagList) {
            $res['CallTagList'] = [];
            if (null !== $this->callTagList && \is_array($this->callTagList)) {
                $n = 0;
                foreach ($this->callTagList as $item) {
                    $res['CallTagList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallTagList'])) {
            if (!empty($map['CallTagList'])) {
                $model->callTagList = [];
                $n                  = 0;
                foreach ($map['CallTagList'] as $item) {
                    $model->callTagList[$n++] = null !== $item ? callTagList::fromMap($item) : $item;
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
