<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAuthorizedAppsResponseBody\authorizedApps\authorizedApp;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAuthorizedAppsResponseBody\authorizedApps\authorizedApp\tag\tagInfo;

class tag extends Model
{
    /**
     * @var tagInfo[]
     */
    public $tagInfo;
    protected $_name = [
        'tagInfo' => 'TagInfo',
    ];

    public function validate()
    {
        if (\is_array($this->tagInfo)) {
            Model::validateArray($this->tagInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagInfo) {
            if (\is_array($this->tagInfo)) {
                $res['TagInfo'] = [];
                $n1             = 0;
                foreach ($this->tagInfo as $item1) {
                    $res['TagInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TagInfo'])) {
            if (!empty($map['TagInfo'])) {
                $model->tagInfo = [];
                $n1             = 0;
                foreach ($map['TagInfo'] as $item1) {
                    $model->tagInfo[$n1++] = tagInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
