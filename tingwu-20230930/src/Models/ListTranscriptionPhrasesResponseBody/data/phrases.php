<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models\ListTranscriptionPhrasesResponseBody\data;

use AlibabaCloud\Dara\Model;

class phrases extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $phraseId;
    protected $_name = [
        'description' => 'Description',
        'name'        => 'Name',
        'phraseId'    => 'PhraseId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->phraseId) {
            $res['PhraseId'] = $this->phraseId;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PhraseId'])) {
            $model->phraseId = $map['PhraseId'];
        }

        return $model;
    }
}
