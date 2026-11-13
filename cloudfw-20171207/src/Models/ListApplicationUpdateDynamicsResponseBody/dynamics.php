<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\ListApplicationUpdateDynamicsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ListApplicationUpdateDynamicsResponseBody\dynamics\applications;

class dynamics extends Model
{
    /**
     * @var applications[]
     */
    public $applications;

    /**
     * @var string
     */
    public $dynamicInfo;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'applications' => 'Applications',
        'dynamicInfo' => 'DynamicInfo',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->applications)) {
            Model::validateArray($this->applications);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applications) {
            if (\is_array($this->applications)) {
                $res['Applications'] = [];
                $n1 = 0;
                foreach ($this->applications as $item1) {
                    $res['Applications'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dynamicInfo) {
            $res['DynamicInfo'] = $this->dynamicInfo;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['Applications'])) {
            if (!empty($map['Applications'])) {
                $model->applications = [];
                $n1 = 0;
                foreach ($map['Applications'] as $item1) {
                    $model->applications[$n1] = applications::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DynamicInfo'])) {
            $model->dynamicInfo = $map['DynamicInfo'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
