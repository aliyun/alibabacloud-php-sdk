<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupPlansResponseBody\backupPlans\backupPlan;

use AlibabaCloud\Dara\Model;

class paths extends Model
{
    /**
     * @var string[]
     */
    public $path;
    protected $_name = [
        'path' => 'Path',
    ];

    public function validate()
    {
        if (\is_array($this->path)) {
            Model::validateArray($this->path);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->path) {
            if (\is_array($this->path)) {
                $res['Path'] = [];
                $n1 = 0;
                foreach ($this->path as $item1) {
                    $res['Path'][$n1] = $item1;
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
        if (isset($map['Path'])) {
            if (!empty($map['Path'])) {
                $model->path = [];
                $n1 = 0;
                foreach ($map['Path'] as $item1) {
                    $model->path[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
