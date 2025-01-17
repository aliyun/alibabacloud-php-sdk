<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class PageImageRegistryRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $registryNameLike;
    /**
     * @var string[]
     */
    public $registryTypeInList;
    /**
     * @var string[]
     */
    public $registryTypeNotInList;
    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'currentPage'           => 'CurrentPage',
        'pageSize'              => 'PageSize',
        'registryNameLike'      => 'RegistryNameLike',
        'registryTypeInList'    => 'RegistryTypeInList',
        'registryTypeNotInList' => 'RegistryTypeNotInList',
        'sourceIp'              => 'SourceIp',
    ];

    public function validate()
    {
        if (\is_array($this->registryTypeInList)) {
            Model::validateArray($this->registryTypeInList);
        }
        if (\is_array($this->registryTypeNotInList)) {
            Model::validateArray($this->registryTypeNotInList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->registryNameLike) {
            $res['RegistryNameLike'] = $this->registryNameLike;
        }

        if (null !== $this->registryTypeInList) {
            if (\is_array($this->registryTypeInList)) {
                $res['RegistryTypeInList'] = [];
                $n1                        = 0;
                foreach ($this->registryTypeInList as $item1) {
                    $res['RegistryTypeInList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->registryTypeNotInList) {
            if (\is_array($this->registryTypeNotInList)) {
                $res['RegistryTypeNotInList'] = [];
                $n1                           = 0;
                foreach ($this->registryTypeNotInList as $item1) {
                    $res['RegistryTypeNotInList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegistryNameLike'])) {
            $model->registryNameLike = $map['RegistryNameLike'];
        }

        if (isset($map['RegistryTypeInList'])) {
            if (!empty($map['RegistryTypeInList'])) {
                $model->registryTypeInList = [];
                $n1                        = 0;
                foreach ($map['RegistryTypeInList'] as $item1) {
                    $model->registryTypeInList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RegistryTypeNotInList'])) {
            if (!empty($map['RegistryTypeNotInList'])) {
                $model->registryTypeNotInList = [];
                $n1                           = 0;
                foreach ($map['RegistryTypeNotInList'] as $item1) {
                    $model->registryTypeNotInList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
