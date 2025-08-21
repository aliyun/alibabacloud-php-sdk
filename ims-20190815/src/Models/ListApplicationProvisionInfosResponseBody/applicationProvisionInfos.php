<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListApplicationProvisionInfosResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListApplicationProvisionInfosResponseBody\applicationProvisionInfos\applicationProvisionInfo;

class applicationProvisionInfos extends Model
{
    /**
     * @var applicationProvisionInfo[]
     */
    public $applicationProvisionInfo;
    protected $_name = [
        'applicationProvisionInfo' => 'ApplicationProvisionInfo',
    ];

    public function validate()
    {
        if (\is_array($this->applicationProvisionInfo)) {
            Model::validateArray($this->applicationProvisionInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationProvisionInfo) {
            if (\is_array($this->applicationProvisionInfo)) {
                $res['ApplicationProvisionInfo'] = [];
                $n1 = 0;
                foreach ($this->applicationProvisionInfo as $item1) {
                    $res['ApplicationProvisionInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ApplicationProvisionInfo'])) {
            if (!empty($map['ApplicationProvisionInfo'])) {
                $model->applicationProvisionInfo = [];
                $n1 = 0;
                foreach ($map['ApplicationProvisionInfo'] as $item1) {
                    $model->applicationProvisionInfo[$n1] = applicationProvisionInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
