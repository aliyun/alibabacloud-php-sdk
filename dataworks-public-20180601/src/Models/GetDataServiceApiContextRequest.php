<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20180601\Models;

use AlibabaCloud\Tea\Model;

class GetDataServiceApiContextRequest extends Model
{
    /**
     * @description apiId
     *
     * @example 12345
     *
     * @var int
     */
    public $apiId;

    /**
     * @example 1
     *
     * @var int
     */
    public $apiStatus;

    /**
     * @example abc-124
     *
     * @var string
     */
    public $cacheKey;

    /**
     * @example true
     *
     * @var bool
     */
    public $forPrivateResGroup;

    /**
     * @example true
     *
     * @var bool
     */
    public $verbose;
    protected $_name = [
        'apiId'              => 'ApiId',
        'apiStatus'          => 'ApiStatus',
        'cacheKey'           => 'CacheKey',
        'forPrivateResGroup' => 'ForPrivateResGroup',
        'verbose'            => 'Verbose',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiStatus) {
            $res['ApiStatus'] = $this->apiStatus;
        }
        if (null !== $this->cacheKey) {
            $res['CacheKey'] = $this->cacheKey;
        }
        if (null !== $this->forPrivateResGroup) {
            $res['ForPrivateResGroup'] = $this->forPrivateResGroup;
        }
        if (null !== $this->verbose) {
            $res['Verbose'] = $this->verbose;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDataServiceApiContextRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiStatus'])) {
            $model->apiStatus = $map['ApiStatus'];
        }
        if (isset($map['CacheKey'])) {
            $model->cacheKey = $map['CacheKey'];
        }
        if (isset($map['ForPrivateResGroup'])) {
            $model->forPrivateResGroup = $map['ForPrivateResGroup'];
        }
        if (isset($map['Verbose'])) {
            $model->verbose = $map['Verbose'];
        }

        return $model;
    }
}
