<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\PullServicesResponseBody\data;

use AlibabaCloud\Dara\Model;

class services extends Model
{
    /**
     * @var string
     */
    public $groupName;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $namespace;
    /**
     * @var string
     */
    public $sourceId;
    /**
     * @var int[]
     */
    public $sourceIdList;
    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'groupName'    => 'GroupName',
        'name'         => 'Name',
        'namespace'    => 'Namespace',
        'sourceId'     => 'SourceId',
        'sourceIdList' => 'SourceIdList',
        'sourceType'   => 'SourceType',
    ];

    public function validate()
    {
        if (\is_array($this->sourceIdList)) {
            Model::validateArray($this->sourceIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }

        if (null !== $this->sourceIdList) {
            if (\is_array($this->sourceIdList)) {
                $res['SourceIdList'] = [];
                $n1                  = 0;
                foreach ($this->sourceIdList as $item1) {
                    $res['SourceIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
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
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }

        if (isset($map['SourceIdList'])) {
            if (!empty($map['SourceIdList'])) {
                $model->sourceIdList = [];
                $n1                  = 0;
                foreach ($map['SourceIdList'] as $item1) {
                    $model->sourceIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
