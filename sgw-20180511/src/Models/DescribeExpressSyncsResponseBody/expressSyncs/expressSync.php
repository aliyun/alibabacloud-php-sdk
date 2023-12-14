<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeExpressSyncsResponseBody\expressSyncs;

use AlibabaCloud\Tea\Model;

class expressSync extends Model
{
    /**
     * @example sgw-mns***
     *
     * @var string
     */
    public $bucketName;

    /**
     * @example test***
     *
     * @var string
     */
    public $bucketPrefix;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $bucketRegion;

    /**
     * @var string
     */
    public $description;

    /**
     * @example sync-0002xetjdlxne2sdm***
     *
     * @var string
     */
    public $expressSyncId;

    /**
     * @example sgw-express-sync-0002xetjdlxne2sdm***
     *
     * @var string
     */
    public $mnsTopic;

    /**
     * @example wptest***
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'bucketName'    => 'BucketName',
        'bucketPrefix'  => 'BucketPrefix',
        'bucketRegion'  => 'BucketRegion',
        'description'   => 'Description',
        'expressSyncId' => 'ExpressSyncId',
        'mnsTopic'      => 'MnsTopic',
        'name'          => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->bucketPrefix) {
            $res['BucketPrefix'] = $this->bucketPrefix;
        }
        if (null !== $this->bucketRegion) {
            $res['BucketRegion'] = $this->bucketRegion;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->expressSyncId) {
            $res['ExpressSyncId'] = $this->expressSyncId;
        }
        if (null !== $this->mnsTopic) {
            $res['MnsTopic'] = $this->mnsTopic;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return expressSync
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['BucketPrefix'])) {
            $model->bucketPrefix = $map['BucketPrefix'];
        }
        if (isset($map['BucketRegion'])) {
            $model->bucketRegion = $map['BucketRegion'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExpressSyncId'])) {
            $model->expressSyncId = $map['ExpressSyncId'];
        }
        if (isset($map['MnsTopic'])) {
            $model->mnsTopic = $map['MnsTopic'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
