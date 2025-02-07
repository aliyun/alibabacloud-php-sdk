<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterAttributeResponseBody\DBCluster;

use AlibabaCloud\Dara\Model;

class scaleOutStatus extends Model
{
    /**
     * @var string
     */
    public $progress;
    /**
     * @var string
     */
    public $ratio;
    protected $_name = [
        'progress' => 'Progress',
        'ratio'    => 'Ratio',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        if (null !== $this->ratio) {
            $res['Ratio'] = $this->ratio;
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
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        if (isset($map['Ratio'])) {
            $model->ratio = $map['Ratio'];
        }

        return $model;
    }
}
