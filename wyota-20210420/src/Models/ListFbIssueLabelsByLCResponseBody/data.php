<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\ListFbIssueLabelsByLCResponseBody;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->issueLabel)) {
            Model::validateArray($this->issueLabel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->issueLabel) {
            if (\is_array($this->issueLabel)) {
                $res['IssueLabel'] = [];
                $n1 = 0;
                foreach ($this->issueLabel as $item1) {
                    $res['IssueLabel'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['IssueLabel'])) {
            if (!empty($map['IssueLabel'])) {
                $model->issueLabel = [];
                $n1 = 0;
                foreach ($map['IssueLabel'] as $item1) {
                    $model->issueLabel[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
