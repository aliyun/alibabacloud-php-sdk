<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\GetLaunchTemplateDataResponseBody\launchTemplateData;

use AlibabaCloud\SDK\Ecs\V20160314\Models\GetLaunchTemplateDataResponseBody\launchTemplateData\dataDisks\dataDisk;
use AlibabaCloud\Tea\Model;

class dataDisks extends Model
{
    /**
     * @var dataDisk[]
     */
    public $dataDisk;
    protected $_name = [
        'dataDisk' => 'DataDisk',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataDisk) {
            $res['DataDisk'] = [];
            if (null !== $this->dataDisk && \is_array($this->dataDisk)) {
                $n = 0;
                foreach ($this->dataDisk as $item) {
                    $res['DataDisk'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataDisks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataDisk'])) {
            if (!empty($map['DataDisk'])) {
                $model->dataDisk = [];
                $n               = 0;
                foreach ($map['DataDisk'] as $item) {
                    $model->dataDisk[$n++] = null !== $item ? dataDisk::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
