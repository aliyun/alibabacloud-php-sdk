<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class GetSecretParametersByPathRequest extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $path;

    /**
     * @var bool
     */
    public $recursive;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $withDecryption;
    protected $_name = [
        'maxResults'     => 'MaxResults',
        'nextToken'      => 'NextToken',
        'path'           => 'Path',
        'recursive'      => 'Recursive',
        'regionId'       => 'RegionId',
        'withDecryption' => 'WithDecryption',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->recursive) {
            $res['Recursive'] = $this->recursive;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->withDecryption) {
            $res['WithDecryption'] = $this->withDecryption;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSecretParametersByPathRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Recursive'])) {
            $model->recursive = $map['Recursive'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['WithDecryption'])) {
            $model->withDecryption = $map['WithDecryption'];
        }

        return $model;
    }
}
