<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliyunAuth\V20181222\Models\AuthenticateResponseBody\data\userInputList;

use AlibabaCloud\Dara\Model;

class queryAuthRSDTO extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $expandContent;

    /**
     * @var string
     */
    public $fieldName;

    /**
     * @var string
     */
    public $fieldVid;
    protected $_name = [
        'content' => 'Content',
        'expandContent' => 'ExpandContent',
        'fieldName' => 'FieldName',
        'fieldVid' => 'FieldVid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->expandContent) {
            $res['ExpandContent'] = $this->expandContent;
        }

        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }

        if (null !== $this->fieldVid) {
            $res['FieldVid'] = $this->fieldVid;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['ExpandContent'])) {
            $model->expandContent = $map['ExpandContent'];
        }

        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }

        if (isset($map['FieldVid'])) {
            $model->fieldVid = $map['FieldVid'];
        }

        return $model;
    }
}
