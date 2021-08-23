<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryEntitiesResponseBody\entities;

use AlibabaCloud\Tea\Model;

class members extends Model
{
    /**
     * @var string[]
     */
    public $synonyms;

    /**
     * @var string
     */
    public $memberName;
    protected $_name = [
        'synonyms'   => 'Synonyms',
        'memberName' => 'MemberName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->synonyms) {
            $res['Synonyms'] = $this->synonyms;
        }
        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return members
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Synonyms'])) {
            if (!empty($map['Synonyms'])) {
                $model->synonyms = $map['Synonyms'];
            }
        }
        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }

        return $model;
    }
}
