<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyApplicationServerlessConfRequest\serverlessConfList;

class ModifyApplicationServerlessConfRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var serverlessConfList[]
     */
    public $serverlessConfList;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'serverlessConfList' => 'ServerlessConfList',
    ];

    public function validate()
    {
        if (\is_array($this->serverlessConfList)) {
            Model::validateArray($this->serverlessConfList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->serverlessConfList) {
            if (\is_array($this->serverlessConfList)) {
                $res['ServerlessConfList'] = [];
                $n1 = 0;
                foreach ($this->serverlessConfList as $item1) {
                    $res['ServerlessConfList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['ServerlessConfList'])) {
            if (!empty($map['ServerlessConfList'])) {
                $model->serverlessConfList = [];
                $n1 = 0;
                foreach ($map['ServerlessConfList'] as $item1) {
                    $model->serverlessConfList[$n1] = serverlessConfList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
