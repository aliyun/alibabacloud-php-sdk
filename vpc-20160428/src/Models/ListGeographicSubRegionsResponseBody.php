<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;

class ListGeographicSubRegionsResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;
    /**
     * @var string[]
     */
    public $geographicSubRegions;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'count'                => 'Count',
        'geographicSubRegions' => 'GeographicSubRegions',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->geographicSubRegions)) {
            Model::validateArray($this->geographicSubRegions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->geographicSubRegions) {
            if (\is_array($this->geographicSubRegions)) {
                $res['GeographicSubRegions'] = [];
                $n1                          = 0;
                foreach ($this->geographicSubRegions as $item1) {
                    $res['GeographicSubRegions'][$n1++] = $item1;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['GeographicSubRegions'])) {
            if (!empty($map['GeographicSubRegions'])) {
                $model->geographicSubRegions = [];
                $n1                          = 0;
                foreach ($map['GeographicSubRegions'] as $item1) {
                    $model->geographicSubRegions[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
