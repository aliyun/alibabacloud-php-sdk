<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;

class CreatePdfTranslateTaskRequest extends Model
{
    /**
     * @var string
     */
    public $docId;

    /**
     * @var string
     */
    public $knowledge;

    /**
     * @var string
     */
    public $libraryId;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $translateTo;
    protected $_name = [
        'docId' => 'docId',
        'knowledge' => 'knowledge',
        'libraryId' => 'libraryId',
        'modelId' => 'modelId',
        'translateTo' => 'translateTo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->docId) {
            $res['docId'] = $this->docId;
        }

        if (null !== $this->knowledge) {
            $res['knowledge'] = $this->knowledge;
        }

        if (null !== $this->libraryId) {
            $res['libraryId'] = $this->libraryId;
        }

        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }

        if (null !== $this->translateTo) {
            $res['translateTo'] = $this->translateTo;
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
        if (isset($map['docId'])) {
            $model->docId = $map['docId'];
        }

        if (isset($map['knowledge'])) {
            $model->knowledge = $map['knowledge'];
        }

        if (isset($map['libraryId'])) {
            $model->libraryId = $map['libraryId'];
        }

        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }

        if (isset($map['translateTo'])) {
            $model->translateTo = $map['translateTo'];
        }

        return $model;
    }
}
