<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListRayClusterResponseBody\rayClusters;

class ListRayClusterResponseBody extends Model
{
    /**
     * @var rayClusters[]
     */
    public $rayClusters;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'rayClusters' => 'rayClusters',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->rayClusters)) {
            Model::validateArray($this->rayClusters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rayClusters) {
            if (\is_array($this->rayClusters)) {
                $res['rayClusters'] = [];
                $n1 = 0;
                foreach ($this->rayClusters as $item1) {
                    $res['rayClusters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['rayClusters'])) {
            if (!empty($map['rayClusters'])) {
                $model->rayClusters = [];
                $n1 = 0;
                foreach ($map['rayClusters'] as $item1) {
                    $model->rayClusters[$n1] = rayClusters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
