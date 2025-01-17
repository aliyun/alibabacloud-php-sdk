<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBinarySecurityPoliciesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBinarySecurityPoliciesResponseBody\binarySecurityPolicies\clusters;

class binarySecurityPolicies extends Model
{
    /**
     * @var clusters[]
     */
    public $clusters;
    /**
     * @var string
     */
    public $name;
    /**
     * @var mixed[]
     */
    public $policy;
    /**
     * @var string
     */
    public $remark;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'clusters' => 'Clusters',
        'name'     => 'Name',
        'policy'   => 'Policy',
        'remark'   => 'Remark',
        'status'   => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->clusters)) {
            Model::validateArray($this->clusters);
        }
        if (\is_array($this->policy)) {
            Model::validateArray($this->policy);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusters) {
            if (\is_array($this->clusters)) {
                $res['Clusters'] = [];
                $n1              = 0;
                foreach ($this->clusters as $item1) {
                    $res['Clusters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->policy) {
            if (\is_array($this->policy)) {
                $res['Policy'] = [];
                foreach ($this->policy as $key1 => $value1) {
                    $res['Policy'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Clusters'])) {
            if (!empty($map['Clusters'])) {
                $model->clusters = [];
                $n1              = 0;
                foreach ($map['Clusters'] as $item1) {
                    $model->clusters[$n1++] = clusters::fromMap($item1);
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Policy'])) {
            if (!empty($map['Policy'])) {
                $model->policy = [];
                foreach ($map['Policy'] as $key1 => $value1) {
                    $model->policy[$key1] = $value1;
                }
            }
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
