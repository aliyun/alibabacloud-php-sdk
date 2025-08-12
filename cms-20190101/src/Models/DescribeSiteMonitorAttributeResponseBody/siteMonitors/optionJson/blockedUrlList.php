<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson;

use AlibabaCloud\Dara\Model;

class blockedUrlList extends Model
{
    /**
     * @var string[]
     */
    public $blockedUrlList;
    protected $_name = [
        'blockedUrlList' => 'blocked_url_list',
    ];

    public function validate()
    {
        if (\is_array($this->blockedUrlList)) {
            Model::validateArray($this->blockedUrlList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blockedUrlList) {
            if (\is_array($this->blockedUrlList)) {
                $res['blocked_url_list'] = [];
                $n1 = 0;
                foreach ($this->blockedUrlList as $item1) {
                    $res['blocked_url_list'][$n1] = $item1;
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
        if (isset($map['blocked_url_list'])) {
            if (!empty($map['blocked_url_list'])) {
                $model->blockedUrlList = [];
                $n1 = 0;
                foreach ($map['blocked_url_list'] as $item1) {
                    $model->blockedUrlList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
