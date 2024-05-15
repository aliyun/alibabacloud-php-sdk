<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetQueryOptimizeRuleListRequest extends Model
{
    /**
     * @description The database engine. Valid values:
     *
     *   **MySQL**
     *   **PolarDBMySQL**
     *   **PostgreSQL**
     *
     * This parameter is required.
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The instance IDs. Separate multiple IDs with commas (,).
     *
     * @example rm-2ze8g2am97624****
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @description The region in which the instance resides. Valid values:
     *
     *   **cn-china**: Chinese mainland
     *   **cn-hongkong**: China (Hong Kong)
     *   **ap-southeast-1**: Singapore
     *
     * This parameter takes effect only if **InstanceIds** is left empty. If you leave **InstanceIds** empty, the system obtains data from the region set by **Region**. By default, Region is set to **cn-china**. If you specify **InstanceIds**, **Region** does not take effect and the system obtains data from the region in which the first specified instance resides.****
     *
     * >  If your instances reside in the regions in the Chinese mainland, set this parameter to **cn-china**.
     * @example cn-china
     *
     * @var string
     */
    public $region;

    /**
     * @description A reserved parameter.
     *
     * @example None
     *
     * @var string
     */
    public $tagNames;
    protected $_name = [
        'engine'      => 'Engine',
        'instanceIds' => 'InstanceIds',
        'region'      => 'Region',
        'tagNames'    => 'TagNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->tagNames) {
            $res['TagNames'] = $this->tagNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQueryOptimizeRuleListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['TagNames'])) {
            $model->tagNames = $map['TagNames'];
        }

        return $model;
    }
}
