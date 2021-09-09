<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result\supportVersions\supportVersionList;
use AlibabaCloud\Tea\Model;

class supportVersions extends Model
{
    /**
     * @var string
     */
    public $instanceCategory;

    /**
     * @var supportVersionList[]
     */
    public $supportVersionList;
    protected $_name = [
        'instanceCategory'   => 'instanceCategory',
        'supportVersionList' => 'supportVersionList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceCategory) {
            $res['instanceCategory'] = $this->instanceCategory;
        }
        if (null !== $this->supportVersionList) {
            $res['supportVersionList'] = [];
            if (null !== $this->supportVersionList && \is_array($this->supportVersionList)) {
                $n = 0;
                foreach ($this->supportVersionList as $item) {
                    $res['supportVersionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportVersions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instanceCategory'])) {
            $model->instanceCategory = $map['instanceCategory'];
        }
        if (isset($map['supportVersionList'])) {
            if (!empty($map['supportVersionList'])) {
                $model->supportVersionList = [];
                $n                         = 0;
                foreach ($map['supportVersionList'] as $item) {
                    $model->supportVersionList[$n++] = null !== $item ? supportVersionList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
