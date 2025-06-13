<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupResponseBody\launchResults\launchResult;

class launchResults extends Model
{
    /**
     * @var launchResult[]
     */
    public $launchResult;
    protected $_name = [
        'launchResult' => 'LaunchResult',
    ];

    public function validate()
    {
        if (\is_array($this->launchResult)) {
            Model::validateArray($this->launchResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->launchResult) {
            if (\is_array($this->launchResult)) {
                $res['LaunchResult'] = [];
                $n1 = 0;
                foreach ($this->launchResult as $item1) {
                    $res['LaunchResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LaunchResult'])) {
            if (!empty($map['LaunchResult'])) {
                $model->launchResult = [];
                $n1 = 0;
                foreach ($map['LaunchResult'] as $item1) {
                    $model->launchResult[$n1] = launchResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
