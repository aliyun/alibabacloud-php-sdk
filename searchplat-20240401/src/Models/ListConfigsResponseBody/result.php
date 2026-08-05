<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240401\Models\ListConfigsResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var mixed[]
     */
    public $configData;

    /**
     * @var string
     */
    public $configType;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'configData' => 'configData',
        'configType' => 'configType',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->configData)) {
            Model::validateArray($this->configData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configData) {
            if (\is_array($this->configData)) {
                $res['configData'] = [];
                foreach ($this->configData as $key1 => $value1) {
                    $res['configData'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->configType) {
            $res['configType'] = $this->configType;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['configData'])) {
            if (!empty($map['configData'])) {
                $model->configData = [];
                foreach ($map['configData'] as $key1 => $value1) {
                    $model->configData[$key1] = $value1;
                }
            }
        }

        if (isset($map['configType'])) {
            $model->configType = $map['configType'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
