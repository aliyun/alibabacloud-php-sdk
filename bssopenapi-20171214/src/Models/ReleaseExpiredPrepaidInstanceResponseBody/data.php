<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ReleaseExpiredPrepaidInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ReleaseExpiredPrepaidInstanceResponseBody\data\instanceResults;

class data extends Model
{
    /**
     * @var string
     */
    public $hostId;

    /**
     * @var instanceResults[]
     */
    public $instanceResults;

    /**
     * @var bool
     */
    public $releaseResult;
    protected $_name = [
        'hostId' => 'HostId',
        'instanceResults' => 'InstanceResults',
        'releaseResult' => 'ReleaseResult',
    ];

    public function validate()
    {
        if (\is_array($this->instanceResults)) {
            Model::validateArray($this->instanceResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }

        if (null !== $this->instanceResults) {
            if (\is_array($this->instanceResults)) {
                $res['InstanceResults'] = [];
                $n1 = 0;
                foreach ($this->instanceResults as $item1) {
                    $res['InstanceResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->releaseResult) {
            $res['ReleaseResult'] = $this->releaseResult;
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
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }

        if (isset($map['InstanceResults'])) {
            if (!empty($map['InstanceResults'])) {
                $model->instanceResults = [];
                $n1 = 0;
                foreach ($map['InstanceResults'] as $item1) {
                    $model->instanceResults[$n1] = instanceResults::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ReleaseResult'])) {
            $model->releaseResult = $map['ReleaseResult'];
        }

        return $model;
    }
}
