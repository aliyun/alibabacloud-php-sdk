<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class ListWebApplicationRevisionsOutput extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var Revision[]
     */
    public $revisions;
    protected $_name = [
        'nextToken' => 'NextToken',
        'revisions' => 'Revisions',
    ];

    public function validate()
    {
        if (\is_array($this->revisions)) {
            Model::validateArray($this->revisions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->revisions) {
            if (\is_array($this->revisions)) {
                $res['Revisions'] = [];
                $n1 = 0;
                foreach ($this->revisions as $item1) {
                    $res['Revisions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Revisions'])) {
            if (!empty($map['Revisions'])) {
                $model->revisions = [];
                $n1 = 0;
                foreach ($map['Revisions'] as $item1) {
                    $model->revisions[$n1++] = Revision::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
