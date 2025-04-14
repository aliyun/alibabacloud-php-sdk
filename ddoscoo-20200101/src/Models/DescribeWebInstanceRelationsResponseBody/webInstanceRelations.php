<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebInstanceRelationsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebInstanceRelationsResponseBody\webInstanceRelations\instanceDetails;

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
        'domain' => 'Domain',
        'instanceDetails' => 'InstanceDetails',
    ];

    public function validate()
    {
        if (\is_array($this->instanceDetails)) {
            Model::validateArray($this->instanceDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->instanceDetails) {
            if (\is_array($this->instanceDetails)) {
                $res['InstanceDetails'] = [];
                $n1 = 0;
                foreach ($this->instanceDetails as $item1) {
                    $res['InstanceDetails'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['InstanceDetails'])) {
            if (!empty($map['InstanceDetails'])) {
                $model->instanceDetails = [];
                $n1 = 0;
                foreach ($map['InstanceDetails'] as $item1) {
                    $model->instanceDetails[$n1++] = instanceDetails::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
