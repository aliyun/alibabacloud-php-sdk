<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class DeleteMobileAgentPackageRequest extends Model
{
    /**
     * @var string[]
     */
    public $packageIds;
    protected $_name = [
        'packageIds' => 'PackageIds',
    ];

    public function validate()
    {
        if (\is_array($this->packageIds)) {
            Model::validateArray($this->packageIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->packageIds) {
            if (\is_array($this->packageIds)) {
                $res['PackageIds'] = [];
                $n1 = 0;
                foreach ($this->packageIds as $item1) {
                    $res['PackageIds'][$n1] = $item1;
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
        if (isset($map['PackageIds'])) {
            if (!empty($map['PackageIds'])) {
                $model->packageIds = [];
                $n1 = 0;
                foreach ($map['PackageIds'] as $item1) {
                    $model->packageIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
