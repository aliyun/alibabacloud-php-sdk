<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateLocationDateClusteringTaskRequest;

use AlibabaCloud\Dara\Model;

class locationOptions extends Model
{
    /**
     * @var string[]
     */
    public $locationDateClusterLevels;
    protected $_name = [
        'locationDateClusterLevels' => 'LocationDateClusterLevels',
    ];

    public function validate()
    {
        if (\is_array($this->locationDateClusterLevels)) {
            Model::validateArray($this->locationDateClusterLevels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->locationDateClusterLevels) {
            if (\is_array($this->locationDateClusterLevels)) {
                $res['LocationDateClusterLevels'] = [];
                $n1 = 0;
                foreach ($this->locationDateClusterLevels as $item1) {
                    $res['LocationDateClusterLevels'][$n1++] = $item1;
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
        if (isset($map['LocationDateClusterLevels'])) {
            if (!empty($map['LocationDateClusterLevels'])) {
                $model->locationDateClusterLevels = [];
                $n1 = 0;
                foreach ($map['LocationDateClusterLevels'] as $item1) {
                    $model->locationDateClusterLevels[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
