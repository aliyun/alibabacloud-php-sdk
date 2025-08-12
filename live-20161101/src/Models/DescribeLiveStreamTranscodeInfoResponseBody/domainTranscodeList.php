<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeInfoResponseBody\domainTranscodeList\domainTranscodeInfo;

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
        if (\is_array($this->domainTranscodeInfo)) {
            Model::validateArray($this->domainTranscodeInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainTranscodeInfo) {
            if (\is_array($this->domainTranscodeInfo)) {
                $res['DomainTranscodeInfo'] = [];
                $n1 = 0;
                foreach ($this->domainTranscodeInfo as $item1) {
                    $res['DomainTranscodeInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['DomainTranscodeInfo'])) {
            if (!empty($map['DomainTranscodeInfo'])) {
                $model->domainTranscodeInfo = [];
                $n1 = 0;
                foreach ($map['DomainTranscodeInfo'] as $item1) {
                    $model->domainTranscodeInfo[$n1] = domainTranscodeInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
