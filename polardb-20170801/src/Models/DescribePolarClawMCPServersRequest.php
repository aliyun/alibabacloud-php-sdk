<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DescribePolarClawMCPServersRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string[]
     */
    public $serverList;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'serverList' => 'ServerList',
    ];

    public function validate()
    {
        if (\is_array($this->serverList)) {
            Model::validateArray($this->serverList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->serverList) {
            if (\is_array($this->serverList)) {
                $res['ServerList'] = [];
                $n1 = 0;
                foreach ($this->serverList as $item1) {
                    $res['ServerList'][$n1] = $item1;
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

        if (isset($map['ServerList'])) {
            if (!empty($map['ServerList'])) {
                $model->serverList = [];
                $n1 = 0;
                foreach ($map['ServerList'] as $item1) {
                    $model->serverList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
