<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCAvailableResourceResponseBody\availableZones;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCAvailableResourceResponseBody\availableZones\availableResources\supportedResources;

class availableResources extends Model
{
    /**
     * @var supportedResources[]
     */
    public $supportedResources;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'supportedResources' => 'SupportedResources',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->supportedResources)) {
            Model::validateArray($this->supportedResources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedResources) {
            if (\is_array($this->supportedResources)) {
                $res['SupportedResources'] = [];
                $n1 = 0;
                foreach ($this->supportedResources as $item1) {
                    $res['SupportedResources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['SupportedResources'])) {
            if (!empty($map['SupportedResources'])) {
                $model->supportedResources = [];
                $n1 = 0;
                foreach ($map['SupportedResources'] as $item1) {
                    $model->supportedResources[$n1] = supportedResources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
