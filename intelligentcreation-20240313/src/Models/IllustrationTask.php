<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class IllustrationTask extends Model
{
    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int[]
     */
    public $illustrationIds;

    /**
     * @var int
     */
    public $illustrationTaskId;

    /**
     * @example Success
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @var int
     */
    public $textId;
    protected $_name = [
        'gmtCreate'          => 'gmtCreate',
        'gmtModified'        => 'gmtModified',
        'illustrationIds'    => 'illustrationIds',
        'illustrationTaskId' => 'illustrationTaskId',
        'taskStatus'         => 'taskStatus',
        'textId'             => 'textId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->illustrationIds) {
            $res['illustrationIds'] = $this->illustrationIds;
        }
        if (null !== $this->illustrationTaskId) {
            $res['illustrationTaskId'] = $this->illustrationTaskId;
        }
        if (null !== $this->taskStatus) {
            $res['taskStatus'] = $this->taskStatus;
        }
        if (null !== $this->textId) {
            $res['textId'] = $this->textId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IllustrationTask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['illustrationIds'])) {
            if (!empty($map['illustrationIds'])) {
                $model->illustrationIds = $map['illustrationIds'];
            }
        }
        if (isset($map['illustrationTaskId'])) {
            $model->illustrationTaskId = $map['illustrationTaskId'];
        }
        if (isset($map['taskStatus'])) {
            $model->taskStatus = $map['taskStatus'];
        }
        if (isset($map['textId'])) {
            $model->textId = $map['textId'];
        }

        return $model;
    }
}
