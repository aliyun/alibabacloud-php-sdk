<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeAppSecuritiesResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeAppSecuritiesResponseBody\appSecuritys\appSecurity;
use AlibabaCloud\Tea\Model;

class appSecuritys extends Model
{
    /**
     * @var appSecurity[]
     */
    public $appSecurity;
    protected $_name = [
        'appSecurity' => 'AppSecurity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appSecurity) {
            $res['AppSecurity'] = [];
            if (null !== $this->appSecurity && \is_array($this->appSecurity)) {
                $n = 0;
                foreach ($this->appSecurity as $item) {
                    $res['AppSecurity'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appSecuritys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppSecurity'])) {
            if (!empty($map['AppSecurity'])) {
                $model->appSecurity = [];
                $n                  = 0;
                foreach ($map['AppSecurity'] as $item) {
                    $model->appSecurity[$n++] = null !== $item ? appSecurity::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
