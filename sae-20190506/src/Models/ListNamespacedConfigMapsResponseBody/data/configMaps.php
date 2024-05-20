<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListNamespacedConfigMapsResponseBody\data;

use AlibabaCloud\SDK\Sae\V20190506\Models\ListNamespacedConfigMapsResponseBody\data\configMaps\relateApps;
use AlibabaCloud\Tea\Model;

class configMaps extends Model
{
    /**
     * @description The ID of the ConfigMap instance.
     *
     * @example 1
     *
     * @var int
     */
    public $configMapId;

    /**
     * @description The time when the instance was created.
     *
     * @example 1593760185111
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The data of ConfigMap key-value pairs. Format:
     *
     * k specifies a key and v specifies a value. For more information, see [Manage and use configurations](https://help.aliyun.com/document_detail/171326.html).
     * @example {"k1":"v1","k2":"v2"}
     *
     * @var mixed[]
     */
    public $data;

    /**
     * @description The description of the instance.
     *
     * @example test-desc
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the ConfigMap instance.
     *
     * @example test-name
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the namespace.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The application that is associated with the instance.
     *
     * @var relateApps[]
     */
    public $relateApps;

    /**
     * @description The time when the instance was last modified.
     *
     * @example 1593760185111
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'configMapId' => 'ConfigMapId',
        'createTime'  => 'CreateTime',
        'data'        => 'Data',
        'description' => 'Description',
        'name'        => 'Name',
        'namespaceId' => 'NamespaceId',
        'relateApps'  => 'RelateApps',
        'updateTime'  => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configMapId) {
            $res['ConfigMapId'] = $this->configMapId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->relateApps) {
            $res['RelateApps'] = [];
            if (null !== $this->relateApps && \is_array($this->relateApps)) {
                $n = 0;
                foreach ($this->relateApps as $item) {
                    $res['RelateApps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configMaps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigMapId'])) {
            $model->configMapId = $map['ConfigMapId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['RelateApps'])) {
            if (!empty($map['RelateApps'])) {
                $model->relateApps = [];
                $n                 = 0;
                foreach ($map['RelateApps'] as $item) {
                    $model->relateApps[$n++] = null !== $item ? relateApps::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
