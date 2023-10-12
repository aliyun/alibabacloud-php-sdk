<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListResourceInformationsResponseBody;

use AlibabaCloud\SDK\Cmn\V20200825\Models\ListResourceInformationsResponseBody\resourceInformation\information;
use AlibabaCloud\Tea\Model;

class resourceInformation extends Model
{
    /**
     * @description 信息
     *
     * @var information[]
     */
    public $information;

    /**
     * @description 资源属性
     *
     * @example 6510
     *
     * @var string
     */
    public $resourceAttribute;

    /**
     * @description 代表资源一级ID的资源属性字段
     *
     * @var string
     */
    public $resourceInformationId;

    /**
     * @description 资源类型
     *
     * @example CMDB
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'information'           => 'Information',
        'resourceAttribute'     => 'ResourceAttribute',
        'resourceInformationId' => 'ResourceInformationId',
        'resourceType'          => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->information) {
            $res['Information'] = [];
            if (null !== $this->information && \is_array($this->information)) {
                $n = 0;
                foreach ($this->information as $item) {
                    $res['Information'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceAttribute) {
            $res['ResourceAttribute'] = $this->resourceAttribute;
        }
        if (null !== $this->resourceInformationId) {
            $res['ResourceInformationId'] = $this->resourceInformationId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceInformation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Information'])) {
            if (!empty($map['Information'])) {
                $model->information = [];
                $n                  = 0;
                foreach ($map['Information'] as $item) {
                    $model->information[$n++] = null !== $item ? information::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceAttribute'])) {
            $model->resourceAttribute = $map['ResourceAttribute'];
        }
        if (isset($map['ResourceInformationId'])) {
            $model->resourceInformationId = $map['ResourceInformationId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
