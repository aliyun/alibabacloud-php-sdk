<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\PullServicesResponseBody\data;

use AlibabaCloud\Tea\Model;

class services extends Model
{
    /**
     * @description The name of the group.
     *
     * @example test
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The name of the service.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The namespace.
     *
     * @example public
     *
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $saeAppId;

    /**
     * @description The ID of the service source.
     *
     * @example 1
     *
     * @var string
     */
    public $sourceId;

    /**
     * @var int[]
     */
    public $sourceIdList;

    /**
     * @description The type of the service source.
     *
     * @example MSE
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'groupName' => 'GroupName',
        'name' => 'Name',
        'namespace' => 'Namespace',
        'saeAppId' => 'SaeAppId',
        'sourceId' => 'SourceId',
        'sourceIdList' => 'SourceIdList',
        'sourceType' => 'SourceType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->saeAppId) {
            $res['SaeAppId'] = $this->saeAppId;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->sourceIdList) {
            $res['SourceIdList'] = $this->sourceIdList;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return services
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['SaeAppId'])) {
            $model->saeAppId = $map['SaeAppId'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['SourceIdList'])) {
            if (!empty($map['SourceIdList'])) {
                $model->sourceIdList = $map['SourceIdList'];
            }
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
