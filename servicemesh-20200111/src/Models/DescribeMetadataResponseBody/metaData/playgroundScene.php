<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeMetadataResponseBody\metaData;

use AlibabaCloud\Dara\Model;

class playgroundScene extends Model
{
    /**
     * @var string[]
     */
    public $observability;

    /**
     * @var string[]
     */
    public $other;

    /**
     * @var string[]
     */
    public $security;

    /**
     * @var string[]
     */
    public $trafficManagement;
    protected $_name = [
        'observability' => 'observability',
        'other' => 'other',
        'security' => 'security',
        'trafficManagement' => 'trafficManagement',
    ];

    public function validate()
    {
        if (\is_array($this->observability)) {
            Model::validateArray($this->observability);
        }
        if (\is_array($this->other)) {
            Model::validateArray($this->other);
        }
        if (\is_array($this->security)) {
            Model::validateArray($this->security);
        }
        if (\is_array($this->trafficManagement)) {
            Model::validateArray($this->trafficManagement);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->observability) {
            if (\is_array($this->observability)) {
                $res['observability'] = [];
                $n1 = 0;
                foreach ($this->observability as $item1) {
                    $res['observability'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->other) {
            if (\is_array($this->other)) {
                $res['other'] = [];
                $n1 = 0;
                foreach ($this->other as $item1) {
                    $res['other'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->security) {
            if (\is_array($this->security)) {
                $res['security'] = [];
                $n1 = 0;
                foreach ($this->security as $item1) {
                    $res['security'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->trafficManagement) {
            if (\is_array($this->trafficManagement)) {
                $res['trafficManagement'] = [];
                $n1 = 0;
                foreach ($this->trafficManagement as $item1) {
                    $res['trafficManagement'][$n1] = $item1;
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
        if (isset($map['observability'])) {
            if (!empty($map['observability'])) {
                $model->observability = [];
                $n1 = 0;
                foreach ($map['observability'] as $item1) {
                    $model->observability[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['other'])) {
            if (!empty($map['other'])) {
                $model->other = [];
                $n1 = 0;
                foreach ($map['other'] as $item1) {
                    $model->other[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['security'])) {
            if (!empty($map['security'])) {
                $model->security = [];
                $n1 = 0;
                foreach ($map['security'] as $item1) {
                    $model->security[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['trafficManagement'])) {
            if (!empty($map['trafficManagement'])) {
                $model->trafficManagement = [];
                $n1 = 0;
                foreach ($map['trafficManagement'] as $item1) {
                    $model->trafficManagement[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
