<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class CreateConfigMapRequest extends Model
{
    /**
     * @description The key-value pairs of the ConfigMap in the JSON format. Format:
     *
     * This parameter is required.
     * @example {"env.shell": "/bin/sh"}
     *
     * @var string
     */
    public $data;

    /**
     * @description The description. The description must be 1 to 255 characters in length, and cannot contain spaces.
     *
     * @example test-desc
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the ConfigMap. The name can contain digits, letters, and underscores (_). The name must start with a letter.
     *
     * This parameter is required.
     * @example name
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the namespace to which the ConfigMap instance belongs.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $namespaceId;
    protected $_name = [
        'data'        => 'Data',
        'description' => 'Description',
        'name'        => 'Name',
        'namespaceId' => 'NamespaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateConfigMapRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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

        return $model;
    }
}
