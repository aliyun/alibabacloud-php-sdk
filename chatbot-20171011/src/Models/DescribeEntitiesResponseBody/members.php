<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribeEntitiesResponseBody;

use AlibabaCloud\Tea\Model;

class members extends Model
{
    /**
     * @var string
     */
    public $memberName;

    /**
     * @var string[]
     */
    public $synonyms;
    protected $_name = [
        'memberName' => 'MemberName',
        'synonyms'   => 'Synonyms',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
        }
        if (null !== $this->synonyms) {
            $res['Synonyms'] = $this->synonyms;
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
        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }
        if (isset($map['Synonyms'])) {
            if (!empty($map['Synonyms'])) {
                $model->synonyms = $map['Synonyms'];
            }
        }

        return $model;
    }
}
