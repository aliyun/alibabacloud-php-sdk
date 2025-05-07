<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAsrVocabResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAsrVocabResponseBody\data\words;

class data extends Model
{
    /**
     * @var int
     */
    public $asrVersion;

    /**
     * @var string
     */
    public $modelCustomizationId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var words
     */
    public $words;
    protected $_name = [
        'asrVersion' => 'AsrVersion',
        'modelCustomizationId' => 'ModelCustomizationId',
        'name' => 'Name',
        'words' => 'Words',
    ];

    public function validate()
    {
        if (null !== $this->words) {
            $this->words->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asrVersion) {
            $res['AsrVersion'] = $this->asrVersion;
        }

        if (null !== $this->modelCustomizationId) {
            $res['ModelCustomizationId'] = $this->modelCustomizationId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->words) {
            $res['Words'] = null !== $this->words ? $this->words->toArray($noStream) : $this->words;
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
        if (isset($map['AsrVersion'])) {
            $model->asrVersion = $map['AsrVersion'];
        }

        if (isset($map['ModelCustomizationId'])) {
            $model->modelCustomizationId = $map['ModelCustomizationId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Words'])) {
            $model->words = words::fromMap($map['Words']);
        }

        return $model;
    }
}
