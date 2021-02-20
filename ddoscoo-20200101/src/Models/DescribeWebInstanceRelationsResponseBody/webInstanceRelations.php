<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebInstanceRelationsResponseBody;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebInstanceRelationsResponseBody\webInstanceRelations\instanceDetails;
use AlibabaCloud\Tea\Model;

class webInstanceRelations extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var instanceDetails[]
     */
    public $instanceDetails;
    protected $_name = [
        'domain'          => 'Domain',
        'instanceDetails' => 'InstanceDetails',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->instanceDetails) {
            $res['InstanceDetails'] = [];
            if (null !== $this->instanceDetails && \is_array($this->instanceDetails)) {
                $n = 0;
                foreach ($this->instanceDetails as $item) {
                    $res['InstanceDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return webInstanceRelations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['InstanceDetails'])) {
            if (!empty($map['InstanceDetails'])) {
                $model->instanceDetails = [];
                $n                      = 0;
                foreach ($map['InstanceDetails'] as $item) {
                    $model->instanceDetails[$n++] = null !== $item ? instanceDetails::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
