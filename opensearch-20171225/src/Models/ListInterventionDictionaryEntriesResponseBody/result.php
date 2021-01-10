<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListInterventionDictionaryEntriesResponseBody;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListInterventionDictionaryEntriesResponseBody\result\tokens;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $cmd;

    /**
     * @var int
     */
    public $created;

    /**
     * @var string
     */
    public $word;

    /**
     * @var tokens[]
     */
    public $tokens;

    /**
     * @var mixed[]
     */
    public $relevance;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $updated;
    protected $_name = [
        'cmd'       => 'cmd',
        'created'   => 'created',
        'word'      => 'word',
        'tokens'    => 'tokens',
        'relevance' => 'relevance',
        'status'    => 'status',
        'updated'   => 'updated',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cmd) {
            $res['cmd'] = $this->cmd;
        }
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }
        if (null !== $this->word) {
            $res['word'] = $this->word;
        }
        if (null !== $this->tokens) {
            $res['tokens'] = [];
            if (null !== $this->tokens && \is_array($this->tokens)) {
                $n = 0;
                foreach ($this->tokens as $item) {
                    $res['tokens'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->relevance) {
            $res['relevance'] = $this->relevance;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cmd'])) {
            $model->cmd = $map['cmd'];
        }
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }
        if (isset($map['word'])) {
            $model->word = $map['word'];
        }
        if (isset($map['tokens'])) {
            if (!empty($map['tokens'])) {
                $model->tokens = [];
                $n             = 0;
                foreach ($map['tokens'] as $item) {
                    $model->tokens[$n++] = null !== $item ? tokens::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['relevance'])) {
            $model->relevance = $map['relevance'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }

        return $model;
    }
}
