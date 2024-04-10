<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListListenersByIpResponseBody;

use AlibabaCloud\Tea\Model;

class listeners extends Model
{
    /**
     * @description The ID of the data.
     *
     * @example test.yaml
     *
     * @var string
     */
    public $dataId;

    /**
     * @description The group.
     *
     * @example default
     *
     * @var string
     */
    public $group;

    /**
     * @description The verification string.
     *
     * @example 23sdfdf
     *
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $namespaceId;
    protected $_name = [
        'dataId'      => 'DataId',
        'group'       => 'Group',
        'md5'         => 'Md5',
        'namespaceId' => 'NamespaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listeners
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        return $model;
    }
}
