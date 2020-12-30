<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainLogResponseBody\domainLogDetails;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainLogResponseBody\domainLogDetails\domainLogDetail\logInfos;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainLogResponseBody\domainLogDetails\domainLogDetail\pageInfos;
use AlibabaCloud\Tea\Model;

class domainLogDetail extends Model
{
    /**
     * @var pageInfos
     */
    public $pageInfos;

    /**
     * @var int
     */
    public $logCount;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var logInfos
     */
    public $logInfos;
    protected $_name = [
        'pageInfos'  => 'PageInfos',
        'logCount'   => 'LogCount',
        'domainName' => 'DomainName',
        'logInfos'   => 'LogInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageInfos) {
            $res['PageInfos'] = null !== $this->pageInfos ? $this->pageInfos->toMap() : null;
        }
        if (null !== $this->logCount) {
            $res['LogCount'] = $this->logCount;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->logInfos) {
            $res['LogInfos'] = null !== $this->logInfos ? $this->logInfos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainLogDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageInfos'])) {
            $model->pageInfos = pageInfos::fromMap($map['PageInfos']);
        }
        if (isset($map['LogCount'])) {
            $model->logCount = $map['LogCount'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['LogInfos'])) {
            $model->logInfos = logInfos::fromMap($map['LogInfos']);
        }

        return $model;
    }
}
