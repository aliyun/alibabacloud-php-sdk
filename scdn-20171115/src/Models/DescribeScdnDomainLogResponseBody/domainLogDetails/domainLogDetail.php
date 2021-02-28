<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainLogResponseBody\domainLogDetails;

use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainLogResponseBody\domainLogDetails\domainLogDetail\logInfos;
use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainLogResponseBody\domainLogDetails\domainLogDetail\pageInfos;
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
     * @var logInfos
     */
    public $logInfos;
    protected $_name = [
        'pageInfos' => 'PageInfos',
        'logCount'  => 'LogCount',
        'logInfos'  => 'LogInfos',
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
        if (isset($map['LogInfos'])) {
            $model->logInfos = logInfos::fromMap($map['LogInfos']);
        }

        return $model;
    }
}
