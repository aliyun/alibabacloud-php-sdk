<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\TongyiChatDebugInfoResponseBody\answerInfo\answerReferenceInfo;

use AlibabaCloud\Dara\Model;

class itemList extends Model
{
    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $dataSource;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $number;

    /**
     * @var mixed
     */
    public $referenceExt;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'contentType' => 'ContentType',
        'dataSource' => 'DataSource',
        'id' => 'Id',
        'number' => 'Number',
        'referenceExt' => 'ReferenceExt',
        'title' => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }

        if (null !== $this->dataSource) {
            $res['DataSource'] = $this->dataSource;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }

        if (null !== $this->referenceExt) {
            $res['ReferenceExt'] = $this->referenceExt;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        if (isset($map['DataSource'])) {
            $model->dataSource = $map['DataSource'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }

        if (isset($map['ReferenceExt'])) {
            $model->referenceExt = $map['ReferenceExt'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
