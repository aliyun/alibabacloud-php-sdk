<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetIndexVersionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetIndexVersionResponseBody\result\indexVersions;

class result extends Model
{
    /**
     * @var string
     */
    public $cluster;

    /**
     * @var indexVersions[]
     */
    public $indexVersions;
    protected $_name = [
        'cluster' => 'cluster',
        'indexVersions' => 'indexVersions',
    ];

    public function validate()
    {
        if (\is_array($this->indexVersions)) {
            Model::validateArray($this->indexVersions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cluster) {
            $res['cluster'] = $this->cluster;
        }

        if (null !== $this->indexVersions) {
            if (\is_array($this->indexVersions)) {
                $res['indexVersions'] = [];
                $n1 = 0;
                foreach ($this->indexVersions as $item1) {
                    $res['indexVersions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['cluster'])) {
            $model->cluster = $map['cluster'];
        }

        if (isset($map['indexVersions'])) {
            if (!empty($map['indexVersions'])) {
                $model->indexVersions = [];
                $n1 = 0;
                foreach ($map['indexVersions'] as $item1) {
                    $model->indexVersions[$n1] = indexVersions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
