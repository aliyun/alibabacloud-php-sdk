<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterAttributeResponseBody\DBCluster;

use AlibabaCloud\Dara\Model;

class langfuseInstanceIds extends Model
{
    /**
     * @var string[]
     */
    public $langfuseInstanceId;
    protected $_name = [
        'langfuseInstanceId' => 'LangfuseInstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->langfuseInstanceId)) {
            Model::validateArray($this->langfuseInstanceId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->langfuseInstanceId) {
            if (\is_array($this->langfuseInstanceId)) {
                $res['LangfuseInstanceId'] = [];
                $n1 = 0;
                foreach ($this->langfuseInstanceId as $item1) {
                    $res['LangfuseInstanceId'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['LangfuseInstanceId'])) {
            if (!empty($map['LangfuseInstanceId'])) {
                $model->langfuseInstanceId = [];
                $n1 = 0;
                foreach ($map['LangfuseInstanceId'] as $item1) {
                    $model->langfuseInstanceId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
