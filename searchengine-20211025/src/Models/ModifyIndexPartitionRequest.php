<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyIndexPartitionRequest\indexInfos;

class ModifyIndexPartitionRequest extends Model
{
    /**
     * @var string
     */
    public $dataSourceName;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $generation;

    /**
     * @var indexInfos[]
     */
    public $indexInfos;
    protected $_name = [
        'dataSourceName' => 'dataSourceName',
        'domainName' => 'domainName',
        'generation' => 'generation',
        'indexInfos' => 'indexInfos',
    ];

    public function validate()
    {
        if (\is_array($this->indexInfos)) {
            Model::validateArray($this->indexInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSourceName) {
            $res['dataSourceName'] = $this->dataSourceName;
        }

        if (null !== $this->domainName) {
            $res['domainName'] = $this->domainName;
        }

        if (null !== $this->generation) {
            $res['generation'] = $this->generation;
        }

        if (null !== $this->indexInfos) {
            if (\is_array($this->indexInfos)) {
                $res['indexInfos'] = [];
                $n1 = 0;
                foreach ($this->indexInfos as $item1) {
                    $res['indexInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['dataSourceName'])) {
            $model->dataSourceName = $map['dataSourceName'];
        }

        if (isset($map['domainName'])) {
            $model->domainName = $map['domainName'];
        }

        if (isset($map['generation'])) {
            $model->generation = $map['generation'];
        }

        if (isset($map['indexInfos'])) {
            if (!empty($map['indexInfos'])) {
                $model->indexInfos = [];
                $n1 = 0;
                foreach ($map['indexInfos'] as $item1) {
                    $model->indexInfos[$n1] = indexInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
