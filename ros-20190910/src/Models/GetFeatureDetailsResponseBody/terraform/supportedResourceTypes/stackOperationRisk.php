<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\terraform\supportedResourceTypes;

use AlibabaCloud\Dara\Model;

class stackOperationRisk extends Model
{
    /**
     * @var string[]
     */
    public $deleteStack;
    protected $_name = [
        'deleteStack' => 'DeleteStack',
    ];

    public function validate()
    {
        if (\is_array($this->deleteStack)) {
            Model::validateArray($this->deleteStack);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deleteStack) {
            if (\is_array($this->deleteStack)) {
                $res['DeleteStack'] = [];
                $n1 = 0;
                foreach ($this->deleteStack as $item1) {
                    $res['DeleteStack'][$n1] = $item1;
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
        if (isset($map['DeleteStack'])) {
            if (!empty($map['DeleteStack'])) {
                $model->deleteStack = [];
                $n1 = 0;
                foreach ($map['DeleteStack'] as $item1) {
                    $model->deleteStack[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
