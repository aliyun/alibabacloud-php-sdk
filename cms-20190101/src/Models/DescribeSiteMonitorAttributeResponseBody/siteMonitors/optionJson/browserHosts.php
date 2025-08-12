<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson;

use AlibabaCloud\Dara\Model;

class browserHosts extends Model
{
    /**
     * @var string[]
     */
    public $browserHosts;
    protected $_name = [
        'browserHosts' => 'browser_hosts',
    ];

    public function validate()
    {
        if (\is_array($this->browserHosts)) {
            Model::validateArray($this->browserHosts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->browserHosts) {
            if (\is_array($this->browserHosts)) {
                $res['browser_hosts'] = [];
                $n1 = 0;
                foreach ($this->browserHosts as $item1) {
                    $res['browser_hosts'][$n1] = $item1;
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
        if (isset($map['browser_hosts'])) {
            if (!empty($map['browser_hosts'])) {
                $model->browserHosts = [];
                $n1 = 0;
                foreach ($map['browser_hosts'] as $item1) {
                    $model->browserHosts[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
