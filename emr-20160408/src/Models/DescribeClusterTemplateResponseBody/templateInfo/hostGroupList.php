<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterTemplateResponseBody\templateInfo;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterTemplateResponseBody\templateInfo\hostGroupList\hostGroup;
use AlibabaCloud\Tea\Model;

class hostGroupList extends Model
{
    /**
     * @var hostGroup[]
     */
    public $hostGroup;
    protected $_name = [
        'hostGroup' => 'HostGroup',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostGroup) {
            $res['HostGroup'] = [];
            if (null !== $this->hostGroup && \is_array($this->hostGroup)) {
                $n = 0;
                foreach ($this->hostGroup as $item) {
                    $res['HostGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostGroupList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostGroup'])) {
            if (!empty($map['HostGroup'])) {
                $model->hostGroup = [];
                $n                = 0;
                foreach ($map['HostGroup'] as $item) {
                    $model->hostGroup[$n++] = null !== $item ? hostGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
