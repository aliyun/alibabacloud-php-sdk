<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainStagingConfigResponseBody;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainStagingConfigResponseBody\domainConfigs\functionArgs;
use AlibabaCloud\Tea\Model;

class domainConfigs extends Model
{
    /**
     * @description The configuration ID.
     *
     * @example 6xx5
     *
     * @var string
     */
    public $configId;

    /**
     * @description The description of each feature.
     *
     * @var functionArgs[]
     */
    public $functionArgs;

    /**
     * @description The feature name.
     *
     * @example aliauth
     *
     * @var string
     */
    public $functionName;

    /**
     * @description The rule condition ID. This parameter is optional. To create a rule condition, you can configure the **condition** feature that is described in the [Parameters for configuring features for domain names](https://help.aliyun.com/document_detail/388460.html) topic. A rule condition can identify parameters that are included in requests and filter requests based on the identified parameters. Each rule condition has a [ConfigId](https://help.aliyun.com/document_detail/388994.html). You can reference ConfigId instead of ParentId in other features. This way, you can combine rule conditions and features for flexible configurations. For more information, see [BatchSetCdnDomainConfig](https://help.aliyun.com/document_detail/90915.html) or ParentId configuration example in this topic.
     *
     * @example 222728944812032
     *
     * @var string
     */
    public $parentId;

    /**
     * @description The configuration status. Valid values:
     *
     *   **testing**
     *   **configuring**
     *   **success**
     *   **failed**
     *
     * @example success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'configId'     => 'ConfigId',
        'functionArgs' => 'FunctionArgs',
        'functionName' => 'FunctionName',
        'parentId'     => 'ParentId',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->functionArgs) {
            $res['FunctionArgs'] = [];
            if (null !== $this->functionArgs && \is_array($this->functionArgs)) {
                $n = 0;
                foreach ($this->functionArgs as $item) {
                    $res['FunctionArgs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['FunctionArgs'])) {
            if (!empty($map['FunctionArgs'])) {
                $model->functionArgs = [];
                $n                   = 0;
                foreach ($map['FunctionArgs'] as $item) {
                    $model->functionArgs[$n++] = null !== $item ? functionArgs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
