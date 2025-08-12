<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\browserInfo\browserInfo;

class browserInfo extends Model
{
    /**
     * @var browserInfo[]
     */
    public $browserInfo;
    protected $_name = [
        'browserInfo' => 'browser_info',
    ];

    public function validate()
    {
        if (\is_array($this->browserInfo)) {
            Model::validateArray($this->browserInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->browserInfo) {
            if (\is_array($this->browserInfo)) {
                $res['browser_info'] = [];
                $n1 = 0;
                foreach ($this->browserInfo as $item1) {
                    $res['browser_info'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['browser_info'])) {
            if (!empty($map['browser_info'])) {
                $model->browserInfo = [];
                $n1 = 0;
                foreach ($map['browser_info'] as $item1) {
                    $model->browserInfo[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
