<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainLogResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainLogResponseBody\domainLogDetails\domainLogDetail;

class domainLogDetails extends Model
{
    /**
     * @var domainLogDetail[]
     */
    public $domainLogDetail;
    protected $_name = [
        'domainLogDetail' => 'DomainLogDetail',
    ];

    public function validate()
    {
        if (\is_array($this->domainLogDetail)) {
            Model::validateArray($this->domainLogDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainLogDetail) {
            if (\is_array($this->domainLogDetail)) {
                $res['DomainLogDetail'] = [];
                $n1 = 0;
                foreach ($this->domainLogDetail as $item1) {
                    $res['DomainLogDetail'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DomainLogDetail'])) {
            if (!empty($map['DomainLogDetail'])) {
                $model->domainLogDetail = [];
                $n1 = 0;
                foreach ($map['DomainLogDetail'] as $item1) {
                    $model->domainLogDetail[$n1++] = domainLogDetail::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
