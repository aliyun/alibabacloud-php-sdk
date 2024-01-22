<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeConfigMapResponseBody;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeConfigMapResponseBody\data\relateApps;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The name of the ConfigMap instance.
     *
     * @example 1
     *
     * @var int
     */
    public $configMapId;

    /**
     * @description The application that is associated with the instance.
     *
     * @example 1593746835111
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the namespace to which the instance belongs.
     *
     * @example {"k1":"v1","k2":"v2"}
     *
     * @var mixed[]
     */
    public $data;

    /**
     * @description The time when the instance was created.
     *
     * @example test-desc
     *
     * @var string
     */
    public $description;

    /**
     * @description The returned error code. Valid values:
     *
     *   If the call is successful, the **ErrorCode** parameter is not returned.
     *   If the call fails, the **ErrorCode** parameter is returned. For more information, see the "**Error codes**" section of this topic.
     *
     * @example test-configmap
     *
     * @var string
     */
    public $name;

    /**
     * @description The description of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The name of the application.
     *
     * @var relateApps[]
     */
    public $relateApps;

    /**
     * @description The data of ConfigMap key-value pairs. Format:
     *
     * k specifies a key and v specifies a value. For more information, see [Manage and use configurations](~~171326~~).
     * @example 1593747274195
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
     * @return data
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
