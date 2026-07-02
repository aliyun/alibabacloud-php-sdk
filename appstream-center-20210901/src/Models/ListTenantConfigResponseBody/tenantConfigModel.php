<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListTenantConfigResponseBody;

use AlibabaCloud\Dara\Model;

class tenantConfigModel extends Model
{
    /**
     * @var bool
     */
    public $appInstanceGroupExpireRemind;

    /**
     * @var string
     */
    public $multiSessionSupportType;

    /**
     * @var string[]
     */
    public $multiSessionSupportedRegions;
    protected $_name = [
        'appInstanceGroupExpireRemind' => 'AppInstanceGroupExpireRemind',
        'multiSessionSupportType' => 'MultiSessionSupportType',
        'multiSessionSupportedRegions' => 'MultiSessionSupportedRegions',
    ];

    public function validate()
    {
        if (\is_array($this->multiSessionSupportedRegions)) {
            Model::validateArray($this->multiSessionSupportedRegions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appInstanceGroupExpireRemind) {
            $res['AppInstanceGroupExpireRemind'] = $this->appInstanceGroupExpireRemind;
        }

        if (null !== $this->multiSessionSupportType) {
            $res['MultiSessionSupportType'] = $this->multiSessionSupportType;
        }

        if (null !== $this->multiSessionSupportedRegions) {
            if (\is_array($this->multiSessionSupportedRegions)) {
                $res['MultiSessionSupportedRegions'] = [];
                $n1 = 0;
                foreach ($this->multiSessionSupportedRegions as $item1) {
                    $res['MultiSessionSupportedRegions'][$n1] = $item1;
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
        if (isset($map['AppInstanceGroupExpireRemind'])) {
            $model->appInstanceGroupExpireRemind = $map['AppInstanceGroupExpireRemind'];
        }

        if (isset($map['MultiSessionSupportType'])) {
            $model->multiSessionSupportType = $map['MultiSessionSupportType'];
        }

        if (isset($map['MultiSessionSupportedRegions'])) {
            if (!empty($map['MultiSessionSupportedRegions'])) {
                $model->multiSessionSupportedRegions = [];
                $n1 = 0;
                foreach ($map['MultiSessionSupportedRegions'] as $item1) {
                    $model->multiSessionSupportedRegions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
