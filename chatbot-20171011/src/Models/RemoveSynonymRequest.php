<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class RemoveSynonymRequest extends Model
{
    /**
     * @var string
     */
    public $coreWordName;

    /**
     * @var string
     */
    public $synonym;
    protected $_name = [
        'coreWordName' => 'CoreWordName',
        'synonym'      => 'Synonym',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coreWordName) {
            $res['CoreWordName'] = $this->coreWordName;
        }
        if (null !== $this->synonym) {
            $res['Synonym'] = $this->synonym;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveSynonymRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CoreWordName'])) {
            $model->coreWordName = $map['CoreWordName'];
        }
        if (isset($map['Synonym'])) {
            $model->synonym = $map['Synonym'];
        }

        return $model;
    }
}
