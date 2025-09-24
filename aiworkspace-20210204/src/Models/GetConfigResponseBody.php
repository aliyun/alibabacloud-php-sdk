<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetConfigResponseBody\labels;

class GetConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var string
     */
    public $configKey;

    /**
     * @var string
     */
    public $configValue;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var labels[]
     */
    public $labels;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'categoryName' => 'CategoryName',
        'configKey' => 'ConfigKey',
        'configValue' => 'ConfigValue',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'labels' => 'Labels',
        'requestId' => 'RequestId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }

        if (null !== $this->configKey) {
            $res['ConfigKey'] = $this->configKey;
        }

        if (null !== $this->configValue) {
            $res['ConfigValue'] = $this->configValue;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }

        if (isset($map['ConfigKey'])) {
            $model->configKey = $map['ConfigKey'];
        }

        if (isset($map['ConfigValue'])) {
            $model->configValue = $map['ConfigValue'];
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1] = labels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
