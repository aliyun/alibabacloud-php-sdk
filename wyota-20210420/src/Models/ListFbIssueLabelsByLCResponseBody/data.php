<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\ListFbIssueLabelsByLCResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $issueLabel;
    protected $_name = [
        'issueLabel' => 'IssueLabel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->issueLabel) {
            $res['IssueLabel'] = $this->issueLabel;
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
        if (isset($map['IssueLabel'])) {
            if (!empty($map['IssueLabel'])) {
                $model->issueLabel = $map['IssueLabel'];
            }
        }

        return $model;
    }
}
