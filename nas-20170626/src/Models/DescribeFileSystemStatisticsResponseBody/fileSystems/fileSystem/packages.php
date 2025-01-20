<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemStatisticsResponseBody\fileSystems\fileSystem;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemStatisticsResponseBody\fileSystems\fileSystem\packages\package;

class packages extends Model
{
    /**
     * @var package[]
     */
    public $package;
    protected $_name = [
        'package' => 'Package',
    ];

    public function validate()
    {
        if (\is_array($this->package)) {
            Model::validateArray($this->package);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->package) {
            if (\is_array($this->package)) {
                $res['Package'] = [];
                $n1             = 0;
                foreach ($this->package as $item1) {
                    $res['Package'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Package'])) {
            if (!empty($map['Package'])) {
                $model->package = [];
                $n1             = 0;
                foreach ($map['Package'] as $item1) {
                    $model->package[$n1++] = package::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
