<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainLogsExTtlResponseBody\domainLogDetails;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainLogsExTtlResponseBody\domainLogDetails\domainLogDetail\logInfos;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainLogsExTtlResponseBody\domainLogDetails\domainLogDetail\pageInfos;

class domainLogDetail extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
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

    public function validate()
    {
        if (null !== $this->logInfos) {
            $this->logInfos->validate();
        }
        if (null !== $this->pageInfos) {
            $this->pageInfos->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->logCount) {
            $res['LogCount'] = $this->logCount;
        }

        if (null !== $this->logInfos) {
            $res['LogInfos'] = null !== $this->logInfos ? $this->logInfos->toArray($noStream) : $this->logInfos;
        }

        if (null !== $this->pageInfos) {
            $res['PageInfos'] = null !== $this->pageInfos ? $this->pageInfos->toArray($noStream) : $this->pageInfos;
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
