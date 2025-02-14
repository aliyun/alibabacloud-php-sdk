<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListUserVpcResponseBody\userVpcInfos;

class ListUserVpcResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var userVpcInfos[]
     */
    public $userVpcInfos;
    protected $_name = [
        'requestId'    => 'RequestId',
        'userVpcInfos' => 'UserVpcInfos',
    ];

    public function validate()
    {
        if (\is_array($this->userVpcInfos)) {
            Model::validateArray($this->userVpcInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->userVpcInfos) {
            if (\is_array($this->userVpcInfos)) {
                $res['UserVpcInfos'] = [];
                $n1                  = 0;
                foreach ($this->userVpcInfos as $item1) {
                    $res['UserVpcInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UserVpcInfos'])) {
            if (!empty($map['UserVpcInfos'])) {
                $model->userVpcInfos = [];
                $n1                  = 0;
                foreach ($map['UserVpcInfos'] as $item1) {
                    $model->userVpcInfos[$n1++] = userVpcInfos::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
