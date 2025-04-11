<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppSecuritiesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppSecuritiesResponseBody\appSecuritys\appSecurity;

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
        if (\is_array($this->appSecurity)) {
            Model::validateArray($this->appSecurity);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appSecurity) {
            if (\is_array($this->appSecurity)) {
                $res['AppSecurity'] = [];
                $n1 = 0;
                foreach ($this->appSecurity as $item1) {
                    $res['AppSecurity'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AppSecurity'])) {
            if (!empty($map['AppSecurity'])) {
                $model->appSecurity = [];
                $n1 = 0;
                foreach ($map['AppSecurity'] as $item1) {
                    $model->appSecurity[$n1++] = appSecurity::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
