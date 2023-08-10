<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListInterventionDictionaryEntriesResponseBody;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListInterventionDictionaryEntriesResponseBody\result\tokens;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The action. Valid values:
     *
     *   add
     *   delete
     *
     * @example add
     *
     * @var string
     */
    public $cmd;

    /**
     * @description The timestamp when the intervention entry was created.
     *
     * @example 1536690285
     *
     * @var int
     */
    public $created;

    /**
     * @description The content of an intervention entry for category prediction.
     *
     * Example: {"2":1, "100":0}
     * @example {                 "100": "0",                 "200": "2"             }
     *
     * @var mixed[]
     */
    public $relevance;

    /**
     * @description The status of the intervention entry. Valid value:
     *
     *   ACTIVE: The intervention entry takes effect.
     *
     * @example ACTIVE
     *
     * @var string
     */
    public $status;

    /**
     * @description The content of an intervention entry for term weight analysis.
     *
     * @var tokens[]
     */
    public $tokens;

    /**
     * @description The timestamp when the intervention entry was last updated.
     *
     * @example 1537348987
     *
     * @var int
     */
    public $updated;

    /**
     * @description The intervention query in the intervention entry.
     *
     * @example \u8fc7\u513f
     *
     * @var string
     */
    public $word;
    protected $_name = [
        'cmd'       => 'cmd',
        'created'   => 'created',
        'relevance' => 'relevance',
        'status'    => 'status',
        'tokens'    => 'tokens',
        'updated'   => 'updated',
        'word'      => 'word',
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
        if (null !== $this->relevance) {
            $res['relevance'] = $this->relevance;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
        }
        if (null !== $this->word) {
            $res['word'] = $this->word;
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
        if (isset($map['relevance'])) {
            $model->relevance = $map['relevance'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
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
        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }
        if (isset($map['word'])) {
            $model->word = $map['word'];
        }

        return $model;
    }
}
