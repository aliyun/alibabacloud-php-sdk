<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostShareKeysResponseBody\hostShareKeys;

class ListHostShareKeysResponseBody extends Model
{
    /**
     * @var hostShareKeys[]
     */
    public $hostShareKeys;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'hostShareKeys' => 'HostShareKeys',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->hostShareKeys)) {
            Model::validateArray($this->hostShareKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostShareKeys) {
            if (\is_array($this->hostShareKeys)) {
                $res['HostShareKeys'] = [];
                $n1 = 0;
                foreach ($this->hostShareKeys as $item1) {
                    $res['HostShareKeys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['HostShareKeys'])) {
            if (!empty($map['HostShareKeys'])) {
                $model->hostShareKeys = [];
                $n1 = 0;
                foreach ($map['HostShareKeys'] as $item1) {
                    $model->hostShareKeys[$n1] = hostShareKeys::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
