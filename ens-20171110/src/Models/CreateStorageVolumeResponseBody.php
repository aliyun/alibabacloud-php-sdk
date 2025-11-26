<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class CreateStorageVolumeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $volumeId;
    protected $_name = [
        'requestId' => 'RequestId',
        'volumeId' => 'VolumeId',
    ];

    public function validate()
    {
        if (\is_array($this->volumeId)) {
            Model::validateArray($this->volumeId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->volumeId) {
            if (\is_array($this->volumeId)) {
                $res['VolumeId'] = [];
                $n1 = 0;
                foreach ($this->volumeId as $item1) {
                    $res['VolumeId'][$n1] = $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['VolumeId'])) {
            if (!empty($map['VolumeId'])) {
                $model->volumeId = [];
                $n1 = 0;
                foreach ($map['VolumeId'] as $item1) {
                    $model->volumeId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
