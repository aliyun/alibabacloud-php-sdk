<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mhub\V20170825\Models\ListAppsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mhub\V20170825\Models\ListAppsResponseBody\appInfos\appInfo;

class appInfos extends Model
{
    /**
     * @var appInfo[]
     */
    public $appInfo;
    protected $_name = [
        'appInfo' => 'AppInfo',
    ];

    public function validate()
    {
        if (\is_array($this->appInfo)) {
            Model::validateArray($this->appInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appInfo) {
            if (\is_array($this->appInfo)) {
                $res['AppInfo'] = [];
                $n1 = 0;
                foreach ($this->appInfo as $item1) {
                    $res['AppInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AppInfo'])) {
            if (!empty($map['AppInfo'])) {
                $model->appInfo = [];
                $n1 = 0;
                foreach ($map['AppInfo'] as $item1) {
                    $model->appInfo[$n1] = appInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
