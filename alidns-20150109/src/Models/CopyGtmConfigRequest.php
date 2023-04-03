<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class CopyGtmConfigRequest extends Model
{
    /**
     * @description The type of the object that you want to copy. Only the INSTANCE type is supported.
     *
     * @example INSTANCE
     *
     * @var string
     */
    public $copyType;

    /**
     * @description The language that specific response parameters will use.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The ID of the source object. Only instance IDs are supported.
     *
     * @example gtm-cn-0pp1j84v60d
     *
     * @var string
     */
    public $sourceId;

    /**
     * @description The ID of the target object. Only instance IDs are supported.
     *
     * @example gtm-cn-v0h1gaujg06
     *
     * @var string
     */
    public $targetId;
    protected $_name = [
        'copyType' => 'CopyType',
        'lang'     => 'Lang',
        'sourceId' => 'SourceId',
        'targetId' => 'TargetId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->copyType) {
            $res['CopyType'] = $this->copyType;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CopyGtmConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CopyType'])) {
            $model->copyType = $map['CopyType'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }

        return $model;
    }
}
