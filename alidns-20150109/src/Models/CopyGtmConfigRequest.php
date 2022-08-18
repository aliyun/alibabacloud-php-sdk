<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class CopyGtmConfigRequest extends Model
{
    /**
     * @var string
     */
    public $copyType;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $sourceId;

    /**
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
