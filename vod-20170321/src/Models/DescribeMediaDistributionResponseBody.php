<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeMediaDistributionResponseBody\mediaDistributionList;

class DescribeMediaDistributionResponseBody extends Model
{
    /**
     * @var mediaDistributionList[]
     */
    public $mediaDistributionList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'mediaDistributionList' => 'MediaDistributionList',
        'requestId' => 'RequestId',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->mediaDistributionList)) {
            Model::validateArray($this->mediaDistributionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaDistributionList) {
            if (\is_array($this->mediaDistributionList)) {
                $res['MediaDistributionList'] = [];
                $n1 = 0;
                foreach ($this->mediaDistributionList as $item1) {
                    $res['MediaDistributionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['MediaDistributionList'])) {
            if (!empty($map['MediaDistributionList'])) {
                $model->mediaDistributionList = [];
                $n1 = 0;
                foreach ($map['MediaDistributionList'] as $item1) {
                    $model->mediaDistributionList[$n1] = mediaDistributionList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
