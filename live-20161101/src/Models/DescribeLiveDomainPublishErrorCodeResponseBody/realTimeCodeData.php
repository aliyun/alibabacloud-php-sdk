<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainPublishErrorCodeResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainPublishErrorCodeResponseBody\realTimeCodeData\codeData;
use AlibabaCloud\Tea\Model;

class realTimeCodeData extends Model
{
    /**
     * @description The proportions of error codes.
     *
     * @var codeData[]
     */
    public $codeData;

    /**
     * @description The timestamp of the data returned.
     *
     * @example 2016-06-29T09:01:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'codeData' => 'CodeData',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->codeData) {
            $res['CodeData'] = [];
            if (null !== $this->codeData && \is_array($this->codeData)) {
                $n = 0;
                foreach ($this->codeData as $item) {
                    $res['CodeData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return realTimeCodeData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CodeData'])) {
            if (!empty($map['CodeData'])) {
                $model->codeData = [];
                $n = 0;
                foreach ($map['CodeData'] as $item) {
                    $model->codeData[$n++] = null !== $item ? codeData::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
