<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class DescribeNamespaceListRequest extends Model
{
    /**
     * @description Specifies whether to return custom namespaces. Valid values:
     *
     *   **true**: The system returns custom namespaces.
     *   **false**: The system does not return custom namespaces.
     *
     * @example true
     *
     * @var bool
     */
    public $containCustom;

    /**
     * @description Indicates whether hybrid cloud namespaces are excluded. Valid values:
     *
     *   **true**: Hybrid cloud namespaces are excluded.
     *   **false**: Hybrid cloud namespaces are included.
     *
     * @example true
     *
     * @var bool
     */
    public $hybridCloudExclude;
    protected $_name = [
        'containCustom' => 'ContainCustom',
        'hybridCloudExclude' => 'HybridCloudExclude',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->containCustom) {
            $res['ContainCustom'] = $this->containCustom;
        }
        if (null !== $this->hybridCloudExclude) {
            $res['HybridCloudExclude'] = $this->hybridCloudExclude;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNamespaceListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainCustom'])) {
            $model->containCustom = $map['ContainCustom'];
        }
        if (isset($map['HybridCloudExclude'])) {
            $model->hybridCloudExclude = $map['HybridCloudExclude'];
        }

        return $model;
    }
}
