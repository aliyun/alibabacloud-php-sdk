<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\DescribeWorkgroupsResponseBody\workgroups\workgroup\warnings\warning;

use AlibabaCloud\Dara\Model;

class sourceIds extends Model
{
    /**
     * @var string[]
     */
    public $sourceId;
    protected $_name = [
        'sourceId' => 'SourceId',
    ];

    public function validate()
    {
        if (\is_array($this->sourceId)) {
            Model::validateArray($this->sourceId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceId) {
            if (\is_array($this->sourceId)) {
                $res['SourceId'] = [];
                $n1 = 0;
                foreach ($this->sourceId as $item1) {
                    $res['SourceId'][$n1++] = $item1;
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
        if (isset($map['SourceId'])) {
            if (!empty($map['SourceId'])) {
                $model->sourceId = [];
                $n1 = 0;
                foreach ($map['SourceId'] as $item1) {
                    $model->sourceId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
