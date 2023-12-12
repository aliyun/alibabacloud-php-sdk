<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models\ListTranscriptionPhrasesResponseBody\data;

use AlibabaCloud\Tea\Model;

class phrases extends Model
{
    /**
     * @example custom fruit phrases list
     *
     * @var string
     */
    public $description;

    /**
     * @example fruit_phrase
     *
     * @var string
     */
    public $name;

    /**
     * @example a93b91141c0f422fa114af203f8b****
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return phrases
     */
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
