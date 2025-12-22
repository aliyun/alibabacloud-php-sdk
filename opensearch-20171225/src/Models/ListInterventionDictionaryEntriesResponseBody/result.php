<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListInterventionDictionaryEntriesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListInterventionDictionaryEntriesResponseBody\result\tokens;

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
     * @var mixed[]
     */
    public $relevance;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tokens[]
     */
    public $tokens;

    /**
     * @var int
     */
    public $updated;

    /**
     * @var string
     */
    public $word;
    protected $_name = [
        'cmd' => 'cmd',
        'created' => 'created',
        'relevance' => 'relevance',
        'status' => 'status',
        'tokens' => 'tokens',
        'updated' => 'updated',
        'word' => 'word',
    ];

    public function validate()
    {
        if (\is_array($this->relevance)) {
            Model::validateArray($this->relevance);
        }
        if (\is_array($this->tokens)) {
            Model::validateArray($this->tokens);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cmd) {
            $res['cmd'] = $this->cmd;
        }

        if (null !== $this->created) {
            $res['created'] = $this->created;
        }

        if (null !== $this->relevance) {
            if (\is_array($this->relevance)) {
                $res['relevance'] = [];
                foreach ($this->relevance as $key1 => $value1) {
                    $res['relevance'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->tokens) {
            if (\is_array($this->tokens)) {
                $res['tokens'] = [];
                $n1 = 0;
                foreach ($this->tokens as $item1) {
                    $res['tokens'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            if (!empty($map['relevance'])) {
                $model->relevance = [];
                foreach ($map['relevance'] as $key1 => $value1) {
                    $model->relevance[$key1] = $value1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['tokens'])) {
            if (!empty($map['tokens'])) {
                $model->tokens = [];
                $n1 = 0;
                foreach ($map['tokens'] as $item1) {
                    $model->tokens[$n1] = tokens::fromMap($item1);
                    ++$n1;
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
