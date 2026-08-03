<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateGenerateAICoachScriptTaskRequest;

use AlibabaCloud\Dara\Model;

class docList extends Model
{
    /**
     * @var string
     */
    public $docId;

    /**
     * @var string
     */
    public $docName;

    /**
     * @var string
     */
    public $kbId;
    protected $_name = [
        'docId' => 'docId',
        'docName' => 'docName',
        'kbId' => 'kbId',
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

        if (null !== $this->docName) {
            $res['docName'] = $this->docName;
        }

        if (null !== $this->kbId) {
            $res['kbId'] = $this->kbId;
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

        if (isset($map['docName'])) {
            $model->docName = $map['docName'];
        }

        if (isset($map['kbId'])) {
            $model->kbId = $map['kbId'];
        }

        return $model;
    }
}
