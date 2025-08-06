<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListMediaExportJobsResponseBody\mediaExportJobList;

class ListMediaExportJobsResponseBody extends Model
{
    /**
     * @var mediaExportJobList[]
     */
    public $mediaExportJobList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'mediaExportJobList' => 'MediaExportJobList',
        'requestId' => 'RequestId',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->mediaExportJobList)) {
            Model::validateArray($this->mediaExportJobList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaExportJobList) {
            if (\is_array($this->mediaExportJobList)) {
                $res['MediaExportJobList'] = [];
                $n1 = 0;
                foreach ($this->mediaExportJobList as $item1) {
                    $res['MediaExportJobList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MediaExportJobList'])) {
            if (!empty($map['MediaExportJobList'])) {
                $model->mediaExportJobList = [];
                $n1 = 0;
                foreach ($map['MediaExportJobList'] as $item1) {
                    $model->mediaExportJobList[$n1] = mediaExportJobList::fromMap($item1);
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
