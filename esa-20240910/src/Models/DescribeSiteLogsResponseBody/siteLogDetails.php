<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\DescribeSiteLogsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeSiteLogsResponseBody\siteLogDetails\logInfos;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeSiteLogsResponseBody\siteLogDetails\pageInfos;

class siteLogDetails extends Model
{
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

    /**
     * @var int
     */
    public $siteId;

    /**
     * @var string
     */
    public $siteName;
    protected $_name = [
        'logCount' => 'LogCount',
        'logInfos' => 'LogInfos',
        'pageInfos' => 'PageInfos',
        'siteId' => 'SiteId',
        'siteName' => 'SiteName',
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
        if (null !== $this->logCount) {
            $res['LogCount'] = $this->logCount;
        }

        if (null !== $this->logInfos) {
            if (\is_array($this->logInfos)) {
                $res['LogInfos'] = [];
                $n1 = 0;
                foreach ($this->logInfos as $item1) {
                    $res['LogInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageInfos) {
            $res['PageInfos'] = null !== $this->pageInfos ? $this->pageInfos->toArray($noStream) : $this->pageInfos;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        if (null !== $this->siteName) {
            $res['SiteName'] = $this->siteName;
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
        if (isset($map['LogCount'])) {
            $model->logCount = $map['LogCount'];
        }

        if (isset($map['LogInfos'])) {
            if (!empty($map['LogInfos'])) {
                $model->logInfos = [];
                $n1 = 0;
                foreach ($map['LogInfos'] as $item1) {
                    $model->logInfos[$n1++] = logInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['PageInfos'])) {
            $model->pageInfos = pageInfos::fromMap($map['PageInfos']);
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        if (isset($map['SiteName'])) {
            $model->siteName = $map['SiteName'];
        }

        return $model;
    }
}
