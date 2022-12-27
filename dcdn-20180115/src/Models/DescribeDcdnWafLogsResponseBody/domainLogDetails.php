<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafLogsResponseBody;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafLogsResponseBody\domainLogDetails\logInfos;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafLogsResponseBody\domainLogDetails\pageInfos;
use AlibabaCloud\Tea\Model;

class domainLogDetails extends Model
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
     * @var logInfos[]
     */
    public $logInfos;

    /**
     * @var pageInfos
     */
    public $pageInfos;
    protected $_name = [
        'domainName' => 'DomainName',
        'logCount'   => 'LogCount',
        'logInfos'   => 'LogInfos',
        'pageInfos'  => 'PageInfos',
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
        if (null !== $this->logCount) {
            $res['LogCount'] = $this->logCount;
        }
        if (null !== $this->logInfos) {
            $res['LogInfos'] = [];
            if (null !== $this->logInfos && \is_array($this->logInfos)) {
                $n = 0;
                foreach ($this->logInfos as $item) {
                    $res['LogInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfos) {
            $res['PageInfos'] = null !== $this->pageInfos ? $this->pageInfos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainLogDetails
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
            if (!empty($map['LogInfos'])) {
                $model->logInfos = [];
                $n               = 0;
                foreach ($map['LogInfos'] as $item) {
                    $model->logInfos[$n++] = null !== $item ? logInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageInfos'])) {
            $model->pageInfos = pageInfos::fromMap($map['PageInfos']);
        }

        return $model;
    }
}
