<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCustomDomainSampleRateResponseBody;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCustomDomainSampleRateResponseBody\content\domainContent;
use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @var domainContent[]
     */
    public $domainContent;
    protected $_name = [
        'domainContent' => 'DomainContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainContent) {
            $res['DomainContent'] = [];
            if (null !== $this->domainContent && \is_array($this->domainContent)) {
                $n = 0;
                foreach ($this->domainContent as $item) {
                    $res['DomainContent'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainContent'])) {
            if (!empty($map['DomainContent'])) {
                $model->domainContent = [];
                $n                    = 0;
                foreach ($map['DomainContent'] as $item) {
                    $model->domainContent[$n++] = null !== $item ? domainContent::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
