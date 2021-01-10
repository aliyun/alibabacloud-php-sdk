<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeInfoResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeInfoResponseBody\domainTranscodeList\domainTranscodeInfo;
use AlibabaCloud\Tea\Model;

class domainTranscodeList extends Model
{
    /**
     * @var domainTranscodeInfo[]
     */
    public $domainTranscodeInfo;
    protected $_name = [
        'domainTranscodeInfo' => 'DomainTranscodeInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainTranscodeInfo) {
            $res['DomainTranscodeInfo'] = [];
            if (null !== $this->domainTranscodeInfo && \is_array($this->domainTranscodeInfo)) {
                $n = 0;
                foreach ($this->domainTranscodeInfo as $item) {
                    $res['DomainTranscodeInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainTranscodeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainTranscodeInfo'])) {
            if (!empty($map['DomainTranscodeInfo'])) {
                $model->domainTranscodeInfo = [];
                $n                          = 0;
                foreach ($map['DomainTranscodeInfo'] as $item) {
                    $model->domainTranscodeInfo[$n++] = null !== $item ? domainTranscodeInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
