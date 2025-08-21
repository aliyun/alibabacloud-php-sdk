<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result\supportVersions\supportVersionList;

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
        'instanceCategory' => 'instanceCategory',
        'supportVersionList' => 'supportVersionList',
    ];

    public function validate()
    {
        if (\is_array($this->supportVersionList)) {
            Model::validateArray($this->supportVersionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceCategory) {
            $res['instanceCategory'] = $this->instanceCategory;
        }

        if (null !== $this->supportVersionList) {
            if (\is_array($this->supportVersionList)) {
                $res['supportVersionList'] = [];
                $n1 = 0;
                foreach ($this->supportVersionList as $item1) {
                    $res['supportVersionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['instanceCategory'])) {
            $model->instanceCategory = $map['instanceCategory'];
        }

        if (isset($map['supportVersionList'])) {
            if (!empty($map['supportVersionList'])) {
                $model->supportVersionList = [];
                $n1 = 0;
                foreach ($map['supportVersionList'] as $item1) {
                    $model->supportVersionList[$n1] = supportVersionList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
