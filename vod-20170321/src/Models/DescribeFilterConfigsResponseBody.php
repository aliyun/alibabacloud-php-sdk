<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeFilterConfigsResponseBody\filterConfigs;

class DescribeFilterConfigsResponseBody extends Model
{
    /**
     * @var filterConfigs[]
     */
    public $filterConfigs;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'filterConfigs' => 'FilterConfigs',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->filterConfigs)) {
            Model::validateArray($this->filterConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filterConfigs) {
            if (\is_array($this->filterConfigs)) {
                $res['FilterConfigs'] = [];
                $n1 = 0;
                foreach ($this->filterConfigs as $item1) {
                    $res['FilterConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FilterConfigs'])) {
            if (!empty($map['FilterConfigs'])) {
                $model->filterConfigs = [];
                $n1 = 0;
                foreach ($map['FilterConfigs'] as $item1) {
                    $model->filterConfigs[$n1] = filterConfigs::fromMap($item1);
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
