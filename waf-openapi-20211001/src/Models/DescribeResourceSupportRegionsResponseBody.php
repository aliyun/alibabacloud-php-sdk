<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class DescribeResourceSupportRegionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string[]
     */
    public $supportRegions;
    protected $_name = [
        'requestId'      => 'RequestId',
        'supportRegions' => 'SupportRegions',
    ];

    public function validate()
    {
        if (\is_array($this->supportRegions)) {
            Model::validateArray($this->supportRegions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->supportRegions) {
            if (\is_array($this->supportRegions)) {
                $res['SupportRegions'] = [];
                $n1                    = 0;
                foreach ($this->supportRegions as $item1) {
                    $res['SupportRegions'][$n1++] = $item1;
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

        if (isset($map['SupportRegions'])) {
            if (!empty($map['SupportRegions'])) {
                $model->supportRegions = [];
                $n1                    = 0;
                foreach ($map['SupportRegions'] as $item1) {
                    $model->supportRegions[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
