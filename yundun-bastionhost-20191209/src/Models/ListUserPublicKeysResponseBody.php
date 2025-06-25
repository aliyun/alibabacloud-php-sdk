<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListUserPublicKeysResponseBody\publicKeys;

class ListUserPublicKeysResponseBody extends Model
{
    /**
     * @var publicKeys[]
     */
    public $publicKeys;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'publicKeys' => 'PublicKeys',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->publicKeys)) {
            Model::validateArray($this->publicKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->publicKeys) {
            if (\is_array($this->publicKeys)) {
                $res['PublicKeys'] = [];
                $n1 = 0;
                foreach ($this->publicKeys as $item1) {
                    $res['PublicKeys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PublicKeys'])) {
            if (!empty($map['PublicKeys'])) {
                $model->publicKeys = [];
                $n1 = 0;
                foreach ($map['PublicKeys'] as $item1) {
                    $model->publicKeys[$n1] = publicKeys::fromMap($item1);
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
