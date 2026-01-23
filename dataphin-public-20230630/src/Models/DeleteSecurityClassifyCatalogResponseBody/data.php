<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\DeleteSecurityClassifyCatalogResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $childCatalogFullPathList;

    /**
     * @var int[]
     */
    public $classifyIdList;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'childCatalogFullPathList' => 'ChildCatalogFullPathList',
        'classifyIdList' => 'ClassifyIdList',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->childCatalogFullPathList)) {
            Model::validateArray($this->childCatalogFullPathList);
        }
        if (\is_array($this->classifyIdList)) {
            Model::validateArray($this->classifyIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->childCatalogFullPathList) {
            if (\is_array($this->childCatalogFullPathList)) {
                $res['ChildCatalogFullPathList'] = [];
                $n1 = 0;
                foreach ($this->childCatalogFullPathList as $item1) {
                    $res['ChildCatalogFullPathList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->classifyIdList) {
            if (\is_array($this->classifyIdList)) {
                $res['ClassifyIdList'] = [];
                $n1 = 0;
                foreach ($this->classifyIdList as $item1) {
                    $res['ClassifyIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['ChildCatalogFullPathList'])) {
            if (!empty($map['ChildCatalogFullPathList'])) {
                $model->childCatalogFullPathList = [];
                $n1 = 0;
                foreach ($map['ChildCatalogFullPathList'] as $item1) {
                    $model->childCatalogFullPathList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ClassifyIdList'])) {
            if (!empty($map['ClassifyIdList'])) {
                $model->classifyIdList = [];
                $n1 = 0;
                foreach ($map['ClassifyIdList'] as $item1) {
                    $model->classifyIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
