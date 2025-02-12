<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody\serviceConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody\serviceConfig\mockHeaders\mockHeader;

class mockHeaders extends Model
{
    /**
     * @var mockHeader[]
     */
    public $mockHeader;
    protected $_name = [
        'mockHeader' => 'MockHeader',
    ];

    public function validate()
    {
        if (\is_array($this->mockHeader)) {
            Model::validateArray($this->mockHeader);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mockHeader) {
            if (\is_array($this->mockHeader)) {
                $res['MockHeader'] = [];
                $n1                = 0;
                foreach ($this->mockHeader as $item1) {
                    $res['MockHeader'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MockHeader'])) {
            if (!empty($map['MockHeader'])) {
                $model->mockHeader = [];
                $n1                = 0;
                foreach ($map['MockHeader'] as $item1) {
                    $model->mockHeader[$n1++] = mockHeader::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
