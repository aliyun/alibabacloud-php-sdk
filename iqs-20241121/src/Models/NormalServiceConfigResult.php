<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241121\Models;

use AlibabaCloud\Dara\Model;

class NormalServiceConfigResult extends Model
{
    /**
     * @var string
     */
    public $availableTime;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $status;

    /**
     * @var UserAPICountInfo[]
     */
    public $userAPICountInfos;
    protected $_name = [
        'availableTime' => 'availableTime',
        'gmtCreate' => 'gmtCreate',
        'status' => 'status',
        'userAPICountInfos' => 'userAPICountInfos',
    ];

    public function validate()
    {
        if (\is_array($this->userAPICountInfos)) {
            Model::validateArray($this->userAPICountInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableTime) {
            $res['availableTime'] = $this->availableTime;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->userAPICountInfos) {
            if (\is_array($this->userAPICountInfos)) {
                $res['userAPICountInfos'] = [];
                $n1 = 0;
                foreach ($this->userAPICountInfos as $item1) {
                    $res['userAPICountInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['availableTime'])) {
            $model->availableTime = $map['availableTime'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['userAPICountInfos'])) {
            if (!empty($map['userAPICountInfos'])) {
                $model->userAPICountInfos = [];
                $n1 = 0;
                foreach ($map['userAPICountInfos'] as $item1) {
                    $model->userAPICountInfos[$n1] = UserAPICountInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
