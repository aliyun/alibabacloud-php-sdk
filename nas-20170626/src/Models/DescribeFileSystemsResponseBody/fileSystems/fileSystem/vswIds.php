<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem;

use AlibabaCloud\Dara\Model;

class vswIds extends Model
{
    /**
     * @var string[]
     */
    public $vswId;
    protected $_name = [
        'vswId' => 'VswId',
    ];

    public function validate()
    {
        if (\is_array($this->vswId)) {
            Model::validateArray($this->vswId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vswId) {
            if (\is_array($this->vswId)) {
                $res['VswId'] = [];
                $n1 = 0;
                foreach ($this->vswId as $item1) {
                    $res['VswId'][$n1] = $item1;
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
        if (isset($map['VswId'])) {
            if (!empty($map['VswId'])) {
                $model->vswId = [];
                $n1 = 0;
                foreach ($map['VswId'] as $item1) {
                    $model->vswId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
