<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafLogsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafLogsResponseBody\domainLogDetails\logInfos;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafLogsResponseBody\domainLogDetails\pageInfos;

class domainLogDetails extends Model
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
     * @var logInfos[]
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
        if (\is_array($this->logInfos)) {
            Model::validateArray($this->logInfos);
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
            if (\is_array($this->logInfos)) {
                $res['LogInfos'] = [];
                $n1 = 0;
                foreach ($this->logInfos as $item1) {
                    $res['LogInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['LogInfos'])) {
                $model->logInfos = [];
                $n1 = 0;
                foreach ($map['LogInfos'] as $item1) {
                    $model->logInfos[$n1] = logInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageInfos'])) {
            $model->pageInfos = pageInfos::fromMap($map['PageInfos']);
        }

        return $model;
    }
}
