<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ExportDoNotCallNumbersRequest extends Model
{
    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example INSTANCE
     *
     * @var string
     */
    public $scope;

    /**
     * @example RemarkA
     *
     * @var string
     */
    public $searchPattern;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'scope'         => 'Scope',
        'searchPattern' => 'SearchPattern',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->searchPattern) {
            $res['SearchPattern'] = $this->searchPattern;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportDoNotCallNumbersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['SearchPattern'])) {
            $model->searchPattern = $map['SearchPattern'];
        }

        return $model;
    }
}
