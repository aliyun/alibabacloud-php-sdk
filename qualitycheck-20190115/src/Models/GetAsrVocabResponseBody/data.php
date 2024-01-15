<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAsrVocabResponseBody;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAsrVocabResponseBody\data\words;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @var words
     */
    public $words;
    protected $_name = [
        'name'  => 'Name',
        'words' => 'Words',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->words) {
            $res['Words'] = null !== $this->words ? $this->words->toMap() : null;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Words'])) {
            $model->words = words::fromMap($map['Words']);
        }

        return $model;
    }
}
