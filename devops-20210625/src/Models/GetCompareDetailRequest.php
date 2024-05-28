<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class GetCompareDetailRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example c9fb781f3d66ef6ee60bdd5c414f5106454b1426
     *
     * @var string
     */
    public $from;

    /**
     * @example 24 * 1024 * 1024
     *
     * @var int
     */
    public $maxDiffByte;

    /**
     * @example 5000
     *
     * @var int
     */
    public $maxDiffFile;

    /**
     * @example false
     *
     * @var bool
     */
    public $mergeBase;

    /**
     * @description This parameter is required.
     *
     * @example 5ebbc0228123212b59xxxxx
     *
     * @var string
     */
    public $organizationId;

    /**
     * @description This parameter is required.
     *
     * @example b8f6f28520b1936aafe2e638373e19ccafa42b02
     *
     * @var string
     */
    public $to;
    protected $_name = [
        'from'           => 'from',
        'maxDiffByte'    => 'maxDiffByte',
        'maxDiffFile'    => 'maxDiffFile',
        'mergeBase'      => 'mergeBase',
        'organizationId' => 'organizationId',
        'to'             => 'to',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['from'] = $this->from;
        }
        if (null !== $this->maxDiffByte) {
            $res['maxDiffByte'] = $this->maxDiffByte;
        }
        if (null !== $this->maxDiffFile) {
            $res['maxDiffFile'] = $this->maxDiffFile;
        }
        if (null !== $this->mergeBase) {
            $res['mergeBase'] = $this->mergeBase;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }
        if (null !== $this->to) {
            $res['to'] = $this->to;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCompareDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['from'])) {
            $model->from = $map['from'];
        }
        if (isset($map['maxDiffByte'])) {
            $model->maxDiffByte = $map['maxDiffByte'];
        }
        if (isset($map['maxDiffFile'])) {
            $model->maxDiffFile = $map['maxDiffFile'];
        }
        if (isset($map['mergeBase'])) {
            $model->mergeBase = $map['mergeBase'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }
        if (isset($map['to'])) {
            $model->to = $map['to'];
        }

        return $model;
    }
}
