<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Dara\Model;

class ListFeatureViewOnlineFeaturesResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $onlineFeatures;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'onlineFeatures' => 'OnlineFeatures',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->onlineFeatures)) {
            Model::validateArray($this->onlineFeatures);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->onlineFeatures) {
            if (\is_array($this->onlineFeatures)) {
                $res['OnlineFeatures'] = [];
                $n1 = 0;
                foreach ($this->onlineFeatures as $item1) {
                    $res['OnlineFeatures'][$n1] = $item1;
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
        if (isset($map['OnlineFeatures'])) {
            if (!empty($map['OnlineFeatures'])) {
                $model->onlineFeatures = [];
                $n1 = 0;
                foreach ($map['OnlineFeatures'] as $item1) {
                    $model->onlineFeatures[$n1] = $item1;
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
