<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap;

use AlibabaCloud\Dara\Model;

class sourceInstanceIds extends Model
{
    /**
     * @var string[]
     */
    public $sourceInstanceId;
    protected $_name = [
        'sourceInstanceId' => 'SourceInstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->sourceInstanceId)) {
            Model::validateArray($this->sourceInstanceId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceInstanceId) {
            if (\is_array($this->sourceInstanceId)) {
                $res['SourceInstanceId'] = [];
                $n1                      = 0;
                foreach ($this->sourceInstanceId as $item1) {
                    $res['SourceInstanceId'][$n1++] = $item1;
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
        if (isset($map['SourceInstanceId'])) {
            if (!empty($map['SourceInstanceId'])) {
                $model->sourceInstanceId = [];
                $n1                      = 0;
                foreach ($map['SourceInstanceId'] as $item1) {
                    $model->sourceInstanceId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
