<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class UpgradeAICInstanceImageRequest extends Model
{
    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string[]
     */
    public $serverIds;

    /**
     * @var int
     */
    public $timeout;
    protected $_name = [
        'imageId' => 'ImageId',
        'serverIds' => 'ServerIds',
        'timeout' => 'Timeout',
    ];

    public function validate()
    {
        if (\is_array($this->serverIds)) {
            Model::validateArray($this->serverIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->serverIds) {
            if (\is_array($this->serverIds)) {
                $res['ServerIds'] = [];
                $n1 = 0;
                foreach ($this->serverIds as $item1) {
                    $res['ServerIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
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
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['ServerIds'])) {
            if (!empty($map['ServerIds'])) {
                $model->serverIds = [];
                $n1 = 0;
                foreach ($map['ServerIds'] as $item1) {
                    $model->serverIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
