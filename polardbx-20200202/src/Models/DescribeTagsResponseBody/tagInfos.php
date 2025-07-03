<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeTagsResponseBody;

use AlibabaCloud\Dara\Model;

class tagInfos extends Model
{
    /**
     * @var string[]
     */
    public $DBInstanceIds;

    /**
     * @var string
     */
    public $tagKey;

    /**
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'DBInstanceIds' => 'DBInstanceIds',
        'tagKey' => 'TagKey',
        'tagValue' => 'TagValue',
    ];

    public function validate()
    {
        if (\is_array($this->DBInstanceIds)) {
            Model::validateArray($this->DBInstanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceIds) {
            if (\is_array($this->DBInstanceIds)) {
                $res['DBInstanceIds'] = [];
                $n1 = 0;
                foreach ($this->DBInstanceIds as $item1) {
                    $res['DBInstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }

        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
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
        if (isset($map['DBInstanceIds'])) {
            if (!empty($map['DBInstanceIds'])) {
                $model->DBInstanceIds = [];
                $n1 = 0;
                foreach ($map['DBInstanceIds'] as $item1) {
                    $model->DBInstanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }

        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }

        return $model;
    }
}
