<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeEventLevelCountRequest extends Model
{
    /**
     * @example c7e3c5b420a7947c2933303144688****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example clusterId
     *
     * @var string
     */
    public $containerFieldName;

    /**
     * @example c951761046a9c4afe92be0a7b5bexxxxx
     *
     * @var string
     */
    public $containerFieldValue;

    /**
     * @example xxxxxx30389a10c28f6d38f2398f0dcexxxxxxx922b9e8290dc7c3019d4a8,48b87f2c0662e334820f436cb9133f1ae4e053d39b6fad42xxxxxxxxxx
     *
     * @var string
     */
    public $containerIds;

    /**
     * @example sas
     *
     * @var string
     */
    public $from;

    /**
     * @example uuid
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'clusterId'           => 'ClusterId',
        'containerFieldName'  => 'ContainerFieldName',
        'containerFieldValue' => 'ContainerFieldValue',
        'containerIds'        => 'ContainerIds',
        'from'                => 'From',
        'targetType'          => 'TargetType',
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
        if (null !== $this->containerFieldName) {
            $res['ContainerFieldName'] = $this->containerFieldName;
        }
        if (null !== $this->containerFieldValue) {
            $res['ContainerFieldValue'] = $this->containerFieldValue;
        }
        if (null !== $this->containerIds) {
            $res['ContainerIds'] = $this->containerIds;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEventLevelCountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ContainerFieldName'])) {
            $model->containerFieldName = $map['ContainerFieldName'];
        }
        if (isset($map['ContainerFieldValue'])) {
            $model->containerFieldValue = $map['ContainerFieldValue'];
        }
        if (isset($map['ContainerIds'])) {
            $model->containerIds = $map['ContainerIds'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
