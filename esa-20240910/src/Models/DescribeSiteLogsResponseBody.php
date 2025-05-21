<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeSiteLogsResponseBody\siteLogDetails;

class DescribeSiteLogsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var siteLogDetails[]
     */
    public $siteLogDetails;
    protected $_name = [
        'requestId' => 'RequestId',
        'siteLogDetails' => 'SiteLogDetails',
    ];

    public function validate()
    {
        if (\is_array($this->siteLogDetails)) {
            Model::validateArray($this->siteLogDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->siteLogDetails) {
            if (\is_array($this->siteLogDetails)) {
                $res['SiteLogDetails'] = [];
                $n1 = 0;
                foreach ($this->siteLogDetails as $item1) {
                    $res['SiteLogDetails'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SiteLogDetails'])) {
            if (!empty($map['SiteLogDetails'])) {
                $model->siteLogDetails = [];
                $n1 = 0;
                foreach ($map['SiteLogDetails'] as $item1) {
                    $model->siteLogDetails[$n1++] = siteLogDetails::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
