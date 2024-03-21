<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class SaveSearchConditionRequest extends Model
{
    /**
     * @var string
     */
    public $conditionContent;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $tagName;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $umid;
    protected $_name = [
        'conditionContent' => 'ConditionContent',
        'sessionId'        => 'SessionId',
        'tagName'          => 'TagName',
        'type'             => 'Type',
        'umid'             => 'Umid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditionContent) {
            $res['ConditionContent'] = $this->conditionContent;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->umid) {
            $res['Umid'] = $this->umid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveSearchConditionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConditionContent'])) {
            $model->conditionContent = $map['ConditionContent'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Umid'])) {
            $model->umid = $map['Umid'];
        }

        return $model;
    }
}
