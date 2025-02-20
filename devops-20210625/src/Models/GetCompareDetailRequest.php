<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class GetCompareDetailRequest extends Model
{
    /**
     * @var string
     */
    public $from;
    /**
     * @var int
     */
    public $maxDiffByte;
    /**
     * @var int
     */
    public $maxDiffFile;
    /**
     * @var bool
     */
    public $mergeBase;
    /**
     * @var string
     */
    public $organizationId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
