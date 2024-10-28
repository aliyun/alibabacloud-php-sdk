<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\CreateEdgeContainerAppVersionRequest\containers;
use AlibabaCloud\Tea\Model;

class CreateEdgeContainerAppVersionRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example app-88068867578379****
     *
     * @var string
     */
    public $appId;

    /**
     * @description This parameter is required.
     *
     * @example [
     * ]
     * @var containers[]
     */
    public $containers;

    /**
     * @description This parameter is required.
     *
     * @example verson1
     *
     * @var string
     */
    public $name;

    /**
     * @example test app
     *
     * @var string
     */
    public $remarks;
    protected $_name = [
        'appId'      => 'AppId',
        'containers' => 'Containers',
        'name'       => 'Name',
        'remarks'    => 'Remarks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->containers) {
            $res['Containers'] = [];
            if (null !== $this->containers && \is_array($this->containers)) {
                $n = 0;
                foreach ($this->containers as $item) {
                    $res['Containers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->remarks) {
            $res['Remarks'] = $this->remarks;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEdgeContainerAppVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Containers'])) {
            if (!empty($map['Containers'])) {
                $model->containers = [];
                $n                 = 0;
                foreach ($map['Containers'] as $item) {
                    $model->containers[$n++] = null !== $item ? containers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Remarks'])) {
            $model->remarks = $map['Remarks'];
        }

        return $model;
    }
}
