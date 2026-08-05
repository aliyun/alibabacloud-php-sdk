<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240401\Models\ListFunctionInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ListFunctionInstancesResponseBody\result\belongs;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ListFunctionInstancesResponseBody\result\createParameters;

class result extends Model
{
    /**
     * @var belongs
     */
    public $belongs;

    /**
     * @var createParameters[]
     */
    public $createParameters;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $cron;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $extendInfo;

    /**
     * @var string
     */
    public $functionName;

    /**
     * @var string
     */
    public $functionType;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $modelType;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $status;

    /**
     * @var mixed[][]
     */
    public $usageParameters;

    /**
     * @var int
     */
    public $versionId;
    protected $_name = [
        'belongs' => 'belongs',
        'createParameters' => 'createParameters',
        'createTime' => 'createTime',
        'cron' => 'cron',
        'description' => 'description',
        'extendInfo' => 'extendInfo',
        'functionName' => 'functionName',
        'functionType' => 'functionType',
        'instanceName' => 'instanceName',
        'modelType' => 'modelType',
        'source' => 'source',
        'status' => 'status',
        'usageParameters' => 'usageParameters',
        'versionId' => 'versionId',
    ];

    public function validate()
    {
        if (null !== $this->belongs) {
            $this->belongs->validate();
        }
        if (\is_array($this->createParameters)) {
            Model::validateArray($this->createParameters);
        }
        if (\is_array($this->usageParameters)) {
            Model::validateArray($this->usageParameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->belongs) {
            $res['belongs'] = null !== $this->belongs ? $this->belongs->toArray($noStream) : $this->belongs;
        }

        if (null !== $this->createParameters) {
            if (\is_array($this->createParameters)) {
                $res['createParameters'] = [];
                $n1 = 0;
                foreach ($this->createParameters as $item1) {
                    $res['createParameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->cron) {
            $res['cron'] = $this->cron;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->extendInfo) {
            $res['extendInfo'] = $this->extendInfo;
        }

        if (null !== $this->functionName) {
            $res['functionName'] = $this->functionName;
        }

        if (null !== $this->functionType) {
            $res['functionType'] = $this->functionType;
        }

        if (null !== $this->instanceName) {
            $res['instanceName'] = $this->instanceName;
        }

        if (null !== $this->modelType) {
            $res['modelType'] = $this->modelType;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->usageParameters) {
            if (\is_array($this->usageParameters)) {
                $res['usageParameters'] = [];
                $n1 = 0;
                foreach ($this->usageParameters as $item1) {
                    if (\is_array($item1)) {
                        $res['usageParameters'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['usageParameters'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->versionId) {
            $res['versionId'] = $this->versionId;
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
        if (isset($map['belongs'])) {
            $model->belongs = belongs::fromMap($map['belongs']);
        }

        if (isset($map['createParameters'])) {
            if (!empty($map['createParameters'])) {
                $model->createParameters = [];
                $n1 = 0;
                foreach ($map['createParameters'] as $item1) {
                    $model->createParameters[$n1] = createParameters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['cron'])) {
            $model->cron = $map['cron'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['extendInfo'])) {
            $model->extendInfo = $map['extendInfo'];
        }

        if (isset($map['functionName'])) {
            $model->functionName = $map['functionName'];
        }

        if (isset($map['functionType'])) {
            $model->functionType = $map['functionType'];
        }

        if (isset($map['instanceName'])) {
            $model->instanceName = $map['instanceName'];
        }

        if (isset($map['modelType'])) {
            $model->modelType = $map['modelType'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['usageParameters'])) {
            if (!empty($map['usageParameters'])) {
                $model->usageParameters = [];
                $n1 = 0;
                foreach ($map['usageParameters'] as $item1) {
                    if (!empty($item1)) {
                        $model->usageParameters[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->usageParameters[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['versionId'])) {
            $model->versionId = $map['versionId'];
        }

        return $model;
    }
}
