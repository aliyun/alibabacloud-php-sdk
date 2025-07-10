<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByAppResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByAppResponseBody\appApiRelationInfos\appApiRelationInfo;

class appApiRelationInfos extends Model
{
    /**
     * @var appApiRelationInfo[]
     */
    public $appApiRelationInfo;
    protected $_name = [
        'appApiRelationInfo' => 'AppApiRelationInfo',
    ];

    public function validate()
    {
        if (\is_array($this->appApiRelationInfo)) {
            Model::validateArray($this->appApiRelationInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appApiRelationInfo) {
            if (\is_array($this->appApiRelationInfo)) {
                $res['AppApiRelationInfo'] = [];
                $n1 = 0;
                foreach ($this->appApiRelationInfo as $item1) {
                    $res['AppApiRelationInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AppApiRelationInfo'])) {
            if (!empty($map['AppApiRelationInfo'])) {
                $model->appApiRelationInfo = [];
                $n1 = 0;
                foreach ($map['AppApiRelationInfo'] as $item1) {
                    $model->appApiRelationInfo[$n1] = appApiRelationInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
