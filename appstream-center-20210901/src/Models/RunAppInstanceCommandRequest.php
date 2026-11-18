<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class RunAppInstanceCommandRequest extends Model
{
    /**
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @var string[]
     */
    public $appInstanceGroupIds;

    /**
     * @var string
     */
    public $appInstancePersistentId;

    /**
     * @var string[]
     */
    public $appInstancePersistentIds;

    /**
     * @var string
     */
    public $commandContent;

    /**
     * @var string
     */
    public $commandParam;

    /**
     * @var string
     */
    public $commandType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $runScriptType;

    /**
     * @var int
     */
    public $timeout;
    protected $_name = [
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'appInstanceGroupIds' => 'AppInstanceGroupIds',
        'appInstancePersistentId' => 'AppInstancePersistentId',
        'appInstancePersistentIds' => 'AppInstancePersistentIds',
        'commandContent' => 'CommandContent',
        'commandParam' => 'CommandParam',
        'commandType' => 'CommandType',
        'description' => 'Description',
        'productType' => 'ProductType',
        'runScriptType' => 'RunScriptType',
        'timeout' => 'Timeout',
    ];

    public function validate()
    {
        if (\is_array($this->appInstanceGroupIds)) {
            Model::validateArray($this->appInstanceGroupIds);
        }
        if (\is_array($this->appInstancePersistentIds)) {
            Model::validateArray($this->appInstancePersistentIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }

        if (null !== $this->appInstanceGroupIds) {
            if (\is_array($this->appInstanceGroupIds)) {
                $res['AppInstanceGroupIds'] = [];
                $n1 = 0;
                foreach ($this->appInstanceGroupIds as $item1) {
                    $res['AppInstanceGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->appInstancePersistentId) {
            $res['AppInstancePersistentId'] = $this->appInstancePersistentId;
        }

        if (null !== $this->appInstancePersistentIds) {
            if (\is_array($this->appInstancePersistentIds)) {
                $res['AppInstancePersistentIds'] = [];
                $n1 = 0;
                foreach ($this->appInstancePersistentIds as $item1) {
                    $res['AppInstancePersistentIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->commandContent) {
            $res['CommandContent'] = $this->commandContent;
        }

        if (null !== $this->commandParam) {
            $res['CommandParam'] = $this->commandParam;
        }

        if (null !== $this->commandType) {
            $res['CommandType'] = $this->commandType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->runScriptType) {
            $res['RunScriptType'] = $this->runScriptType;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
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
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }

        if (isset($map['AppInstanceGroupIds'])) {
            if (!empty($map['AppInstanceGroupIds'])) {
                $model->appInstanceGroupIds = [];
                $n1 = 0;
                foreach ($map['AppInstanceGroupIds'] as $item1) {
                    $model->appInstanceGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AppInstancePersistentId'])) {
            $model->appInstancePersistentId = $map['AppInstancePersistentId'];
        }

        if (isset($map['AppInstancePersistentIds'])) {
            if (!empty($map['AppInstancePersistentIds'])) {
                $model->appInstancePersistentIds = [];
                $n1 = 0;
                foreach ($map['AppInstancePersistentIds'] as $item1) {
                    $model->appInstancePersistentIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CommandContent'])) {
            $model->commandContent = $map['CommandContent'];
        }

        if (isset($map['CommandParam'])) {
            $model->commandParam = $map['CommandParam'];
        }

        if (isset($map['CommandType'])) {
            $model->commandType = $map['CommandType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['RunScriptType'])) {
            $model->runScriptType = $map['RunScriptType'];
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
