<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorListResponseBody\siteMonitors\siteMonitor;

class siteMonitors extends Model
{
    /**
     * @var siteMonitor[]
     */
    public $siteMonitor;
    protected $_name = [
        'siteMonitor' => 'SiteMonitor',
    ];

    public function validate()
    {
        if (\is_array($this->siteMonitor)) {
            Model::validateArray($this->siteMonitor);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->siteMonitor) {
            if (\is_array($this->siteMonitor)) {
                $res['SiteMonitor'] = [];
                $n1 = 0;
                foreach ($this->siteMonitor as $item1) {
                    $res['SiteMonitor'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['SiteMonitor'])) {
            if (!empty($map['SiteMonitor'])) {
                $model->siteMonitor = [];
                $n1 = 0;
                foreach ($map['SiteMonitor'] as $item1) {
                    $model->siteMonitor[$n1] = siteMonitor::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
