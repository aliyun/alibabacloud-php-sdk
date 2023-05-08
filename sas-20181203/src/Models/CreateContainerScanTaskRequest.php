<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateContainerScanTaskRequest extends Model
{
    /**
     * @description The ID of the cluster to which the container belongs.
     *
     * > You can call the [DescribeGroupedContainerInstances](~~182997~~) operation to query the IDs of clusters.
     * @example c22143730ab6e40b09ec7c1c51d4d****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the container.
     *
     * @example c927cf190e886696db53cda0efb57145394ccf0bf9f525353fa5c22a26e4****
     *
     * @var string
     */
    public $containerIds;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'containerIds' => 'ContainerIds',
        'lang'         => 'Lang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->containerIds) {
            $res['ContainerIds'] = $this->containerIds;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateContainerScanTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ContainerIds'])) {
            $model->containerIds = $map['ContainerIds'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
