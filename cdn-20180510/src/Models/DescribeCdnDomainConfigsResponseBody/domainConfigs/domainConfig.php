<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainConfigsResponseBody\domainConfigs;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainConfigsResponseBody\domainConfigs\domainConfig\functionArgs;
use AlibabaCloud\Tea\Model;

class domainConfig extends Model
{
    /**
     * @description The ID of the configuration.
     *
     * @example 6295
     *
     * @var string
     */
    public $configId;

    /**
     * @description The configuration of each feature.
     *
     * @var functionArgs
     */
    public $functionArgs;

    /**
     * @description The name of the feature.
     *
     * @example aliauth
     *
     * @var string
     */
    public $functionName;

    /**
     * @description The ID of the rule condition. This parameter is optional.
     *
     * To create a rule condition, you can configure the **condition** feature that is described in the [Parameters for configuring features for domain names](https://help.aliyun.com/document_detail/388460.html) topic. A rule condition can identify parameters that are included in requests and filter requests based on the identified parameters. Each rule condition has a [ConfigId](https://help.aliyun.com/document_detail/388994.html). You can use ConfigId as ParentId that is referenced by other features. This way, you can combine rule conditions and features for flexible configurations.
     *
     * For more information, see [BatchSetCdnDomainConfig](https://help.aliyun.com/document_detail/90915.html) or ParentId configuration example in this topic.
     * @example 222728944812032
     *
     * @var string
     */
    public $parentId;

    /**
     * @description The status of the configuration. Valid values:
     *
     *   **success**
     *   **testing**
     *   **failed**
     *   **configuring**
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
            $res['FunctionArgs'] = null !== $this->functionArgs ? $this->functionArgs->toMap() : null;
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
     * @return domainConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['FunctionArgs'])) {
            $model->functionArgs = functionArgs::fromMap($map['FunctionArgs']);
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
