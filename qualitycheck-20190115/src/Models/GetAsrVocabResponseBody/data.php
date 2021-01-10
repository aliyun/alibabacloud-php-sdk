<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAsrVocabResponseBody;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAsrVocabResponseBody\data\words;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var words
     */
    public $words;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'words' => 'Words',
        'name'  => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->words) {
            $res['Words'] = null !== $this->words ? $this->words->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Words'])) {
            $model->words = words::fromMap($map['Words']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
