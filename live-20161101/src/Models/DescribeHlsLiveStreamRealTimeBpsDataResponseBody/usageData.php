<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeHlsLiveStreamRealTimeBpsDataResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeHlsLiveStreamRealTimeBpsDataResponseBody\usageData\streamInfos;
use AlibabaCloud\Tea\Model;

class usageData extends Model
{
    /**
     * @var streamInfos[]
     */
    public $streamInfos;

    /**
     * @var string
     */
    public $domainName;
    protected $_name = [
        'streamInfos' => 'StreamInfos',
        'domainName'  => 'DomainName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->streamInfos) {
            $res['StreamInfos'] = [];
            if (null !== $this->streamInfos && \is_array($this->streamInfos)) {
                $n = 0;
                foreach ($this->streamInfos as $item) {
                    $res['StreamInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return usageData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StreamInfos'])) {
            if (!empty($map['StreamInfos'])) {
                $model->streamInfos = [];
                $n                  = 0;
                foreach ($map['StreamInfos'] as $item) {
                    $model->streamInfos[$n++] = null !== $item ? streamInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        return $model;
    }
}
