<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterV2ResponseBody\clusterInfo\softwareInfo;

use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterV2ResponseBody\clusterInfo\softwareInfo\softwares\software;
use AlibabaCloud\Tea\Model;

class softwares extends Model
{
    /**
     * @var software[]
     */
    public $software;
    protected $_name = [
        'software' => 'Software',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->software) {
            $res['Software'] = [];
            if (null !== $this->software && \is_array($this->software)) {
                $n = 0;
                foreach ($this->software as $item) {
                    $res['Software'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return softwares
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Software'])) {
            if (!empty($map['Software'])) {
                $model->software = [];
                $n               = 0;
                foreach ($map['Software'] as $item) {
                    $model->software[$n++] = null !== $item ? software::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
