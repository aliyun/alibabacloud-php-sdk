<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class ListPermissionResourceForFrontResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $resourceList;
    protected $_name = [
        'requestId' => 'requestId',
        'resourceList' => 'resourceList',
    ];

    public function validate()
    {
        if (\is_array($this->resourceList)) {
            Model::validateArray($this->resourceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->resourceList) {
            if (\is_array($this->resourceList)) {
                $res['resourceList'] = [];
                $n1 = 0;
                foreach ($this->resourceList as $item1) {
                    $res['resourceList'][$n1] = $item1;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['resourceList'])) {
            if (!empty($map['resourceList'])) {
                $model->resourceList = [];
                $n1 = 0;
                foreach ($map['resourceList'] as $item1) {
                    $model->resourceList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
