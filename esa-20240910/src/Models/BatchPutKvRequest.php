<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchPutKvRequest\kvList;

class BatchPutKvRequest extends Model
{
    /**
     * @var kvList[]
     */
    public $kvList;
    /**
     * @var string
     */
    public $namespace;
    protected $_name = [
        'kvList'    => 'KvList',
        'namespace' => 'Namespace',
    ];

    public function validate()
    {
        if (\is_array($this->kvList)) {
            Model::validateArray($this->kvList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->kvList) {
            if (\is_array($this->kvList)) {
                $res['KvList'] = [];
                $n1            = 0;
                foreach ($this->kvList as $item1) {
                    $res['KvList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
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
        if (isset($map['KvList'])) {
            if (!empty($map['KvList'])) {
                $model->kvList = [];
                $n1            = 0;
                foreach ($map['KvList'] as $item1) {
                    $model->kvList[$n1++] = kvList::fromMap($item1);
                }
            }
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        return $model;
    }
}
