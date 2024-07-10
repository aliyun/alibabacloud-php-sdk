<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->revisions) {
            $res['Revisions'] = [];
            if (null !== $this->revisions && \is_array($this->revisions)) {
                $n = 0;
                foreach ($this->revisions as $item) {
                    $res['Revisions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWebApplicationRevisionsOutput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Revisions'])) {
            if (!empty($map['Revisions'])) {
                $model->revisions = [];
                $n                = 0;
                foreach ($map['Revisions'] as $item) {
                    $model->revisions[$n++] = null !== $item ? Revision::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
