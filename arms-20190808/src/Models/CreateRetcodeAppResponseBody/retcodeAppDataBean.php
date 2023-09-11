<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateRetcodeAppResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateRetcodeAppResponseBody\retcodeAppDataBean\tags;
use AlibabaCloud\Tea\Model;

class retcodeAppDataBean extends Model
{
    /**
     * @description The application ID.
     *
     * @example 135143
     *
     * @var int
     */
    public $appId;

    /**
     * @description PID。
     *
     * @example aokcdqn3ly@a195c6d6421****
     *
     * @var string
     */
    public $pid;

    /**
     * @description The ID of the resource group.
     *
     * If this parameter is left empty, the default resource group is used. You can view the resource group ID on the Resource Group page in the Resource Management console.
     * @example rg-acfmxyexli2****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags.
     *
     * @var tags
     */
    public $tags;
    protected $_name = [
        'appId'           => 'AppId',
        'pid'             => 'Pid',
        'resourceGroupId' => 'ResourceGroupId',
        'tags'            => 'Tags',
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
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return retcodeAppDataBean
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
