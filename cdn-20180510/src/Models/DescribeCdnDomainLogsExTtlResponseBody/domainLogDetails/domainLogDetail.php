<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainLogsExTtlResponseBody\domainLogDetails;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainLogsExTtlResponseBody\domainLogDetails\domainLogDetail\logInfos;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainLogsExTtlResponseBody\domainLogDetails\domainLogDetail\pageInfos;
use AlibabaCloud\Tea\Model;

class domainLogDetail extends Model
{
    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example 10
     *
     * @var int
     */
    public $logCount;

    /**
     * @var logInfos
     */
    public $logInfos;

    /**
     * @var pageInfos
     */
    public $pageInfos;
    protected $_name = [
        'domainName' => 'DomainName',
        'logCount' => 'LogCount',
        'logInfos' => 'LogInfos',
        'pageInfos' => 'PageInfos',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->logCount) {
            $res['LogCount'] = $this->logCount;
        }
        if (null !== $this->logInfos) {
            $res['LogInfos'] = null !== $this->logInfos ? $this->logInfos->toMap() : null;
        }
        if (null !== $this->pageInfos) {
            $res['PageInfos'] = null !== $this->pageInfos ? $this->pageInfos->toMap() : null;
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['LogCount'])) {
            $model->logCount = $map['LogCount'];
        }
        if (isset($map['LogInfos'])) {
            $model->logInfos = logInfos::fromMap($map['LogInfos']);
        }
        if (isset($map['PageInfos'])) {
            $model->pageInfos = pageInfos::fromMap($map['PageInfos']);
        }

        return $model;
    }
}
