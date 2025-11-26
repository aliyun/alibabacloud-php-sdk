<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDiskIopsListResponseBody\diskIopsList;

class DescribeDiskIopsListResponseBody extends Model
{
    /**
     * @var diskIopsList[]
     */
    public $diskIopsList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'diskIopsList' => 'DiskIopsList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->diskIopsList)) {
            Model::validateArray($this->diskIopsList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diskIopsList) {
            if (\is_array($this->diskIopsList)) {
                $res['DiskIopsList'] = [];
                $n1 = 0;
                foreach ($this->diskIopsList as $item1) {
                    $res['DiskIopsList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DiskIopsList'])) {
            if (!empty($map['DiskIopsList'])) {
                $model->diskIopsList = [];
                $n1 = 0;
                foreach ($map['DiskIopsList'] as $item1) {
                    $model->diskIopsList[$n1] = diskIopsList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
