<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ListConfigCentersRequest extends Model
{
    /**
     * @var string
     */
    public $dataIdPattern;

    /**
     * @var string
     */
    public $group;

    /**
     * @var string
     */
    public $logicalRegionId;

    /**
     * @var string
     */
    public $appName;
    protected $_name = [
        'dataIdPattern'   => 'DataIdPattern',
        'group'           => 'Group',
        'logicalRegionId' => 'LogicalRegionId',
        'appName'         => 'AppName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataIdPattern) {
            $res['DataIdPattern'] = $this->dataIdPattern;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->logicalRegionId) {
            $res['LogicalRegionId'] = $this->logicalRegionId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListConfigCentersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataIdPattern'])) {
            $model->dataIdPattern = $map['DataIdPattern'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['LogicalRegionId'])) {
            $model->logicalRegionId = $map['LogicalRegionId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        return $model;
    }
}
