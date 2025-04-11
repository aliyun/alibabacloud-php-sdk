<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap;

use AlibabaCloud\Dara\Model;

class prependAsPath extends Model
{
    /**
     * @var string[]
     */
    public $asPath;
    protected $_name = [
        'asPath' => 'AsPath',
    ];

    public function validate()
    {
        if (\is_array($this->asPath)) {
            Model::validateArray($this->asPath);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asPath) {
            if (\is_array($this->asPath)) {
                $res['AsPath'] = [];
                $n1 = 0;
                foreach ($this->asPath as $item1) {
                    $res['AsPath'][$n1++] = $item1;
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
        if (isset($map['AsPath'])) {
            if (!empty($map['AsPath'])) {
                $model->asPath = [];
                $n1 = 0;
                foreach ($map['AsPath'] as $item1) {
                    $model->asPath[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
