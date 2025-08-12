<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson;

use AlibabaCloud\Dara\Model;

class browserHeaders extends Model
{
    /**
     * @var mixed[][]
     */
    public $browserHeaders;
    protected $_name = [
        'browserHeaders' => 'browser_headers',
    ];

    public function validate()
    {
        if (\is_array($this->browserHeaders)) {
            Model::validateArray($this->browserHeaders);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->browserHeaders) {
            if (\is_array($this->browserHeaders)) {
                $res['browser_headers'] = [];
                $n1 = 0;
                foreach ($this->browserHeaders as $item1) {
                    if (\is_array($item1)) {
                        $res['browser_headers'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['browser_headers'][$n1][$key2] = $value2;
                        }
                    }
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
        if (isset($map['browser_headers'])) {
            if (!empty($map['browser_headers'])) {
                $model->browserHeaders = [];
                $n1 = 0;
                foreach ($map['browser_headers'] as $item1) {
                    if (!empty($item1)) {
                        $model->browserHeaders[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->browserHeaders[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
