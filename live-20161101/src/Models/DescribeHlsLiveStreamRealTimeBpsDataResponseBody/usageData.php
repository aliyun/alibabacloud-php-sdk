<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeHlsLiveStreamRealTimeBpsDataResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeHlsLiveStreamRealTimeBpsDataResponseBody\usageData\streamInfos;
use AlibabaCloud\Tea\Model;

class usageData extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var streamInfos[]
     */
    public $streamInfos;
    protected $_name = [
        'domainName'  => 'DomainName',
        'streamInfos' => 'StreamInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->streamInfos) {
            $res['StreamInfos'] = [];
            if (null !== $this->streamInfos && \is_array($this->streamInfos)) {
                $n = 0;
                foreach ($this->streamInfos as $item) {
                    $res['StreamInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['StreamInfos'])) {
            if (!empty($map['StreamInfos'])) {
                $model->streamInfos = [];
                $n                  = 0;
                foreach ($map['StreamInfos'] as $item) {
                    $model->streamInfos[$n++] = null !== $item ? streamInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
