<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class CreateHybridMonitorNamespaceRequest extends Model
{
    /**
     * @description The description of the namespace.
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the namespace.
     *
     * The name can contain lowercase letters, digits, and hyphens (-).
     * @example aliyun
     *
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The data retention period of the namespace. Valid values:
     *
     *   cms.s1.large: 15 days
     *   cms.s1.xlarge: 32 days
     *   cms.s1.2xlarge: 63 days
     *   cms.s1.3xlarge (default value): 93 days
     *   cms.s1.6xlarge: 185 days
     *   cms.s1.12xlarge: 376 days
     *
     * For information about the pricing for different retention periods, see the **Pricing** section in [Billing of the dashboard feature](~~223532~~).
     * @example cms.s1.3xlarge
     *
     * @var string
     */
    public $spec;
    protected $_name = [
        'description' => 'Description',
        'namespace'   => 'Namespace',
        'regionId'    => 'RegionId',
        'spec'        => 'Spec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHybridMonitorNamespaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        return $model;
    }
}
