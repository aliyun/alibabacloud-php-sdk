<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Grace\V20220606\Models;

use AlibabaCloud\SDK\Grace\V20220606\Models\FileInfo\analyzeProgress;
use AlibabaCloud\SDK\Grace\V20220606\Models\FileInfo\transferProgress;
use AlibabaCloud\Tea\Model;

class FileInfo extends Model
{
    /**
     * @var analyzeProgress
     */
    public $analyzeProgress;

    /**
     * @var int
     */
    public $creationTime;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $labels;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $shared;

    /**
     * @var int
     */
    public $size;

    /**
     * @var transferProgress
     */
    public $transferProgress;

    /**
     * @var string
     */
    public $transferState;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'analyzeProgress'  => 'analyzeProgress',
        'creationTime'     => 'creationTime',
        'displayName'      => 'displayName',
        'labels'           => 'labels',
        'name'             => 'name',
        'requestId'        => 'requestId',
        'shared'           => 'shared',
        'size'             => 'size',
        'transferProgress' => 'transferProgress',
        'transferState'    => 'transferState',
        'type'             => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->analyzeProgress) {
            $res['analyzeProgress'] = null !== $this->analyzeProgress ? $this->analyzeProgress->toMap() : null;
        }
        if (null !== $this->creationTime) {
            $res['creationTime'] = $this->creationTime;
        }
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }
        if (null !== $this->labels) {
            $res['labels'] = $this->labels;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->shared) {
            $res['shared'] = $this->shared;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->transferProgress) {
            $res['transferProgress'] = null !== $this->transferProgress ? $this->transferProgress->toMap() : null;
        }
        if (null !== $this->transferState) {
            $res['transferState'] = $this->transferState;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FileInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['analyzeProgress'])) {
            $model->analyzeProgress = analyzeProgress::fromMap($map['analyzeProgress']);
        }
        if (isset($map['creationTime'])) {
            $model->creationTime = $map['creationTime'];
        }
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }
        if (isset($map['labels'])) {
            $model->labels = $map['labels'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['shared'])) {
            $model->shared = $map['shared'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['transferProgress'])) {
            $model->transferProgress = transferProgress::fromMap($map['transferProgress']);
        }
        if (isset($map['transferState'])) {
            $model->transferState = $map['transferState'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
