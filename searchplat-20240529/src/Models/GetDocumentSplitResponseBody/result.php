<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetDocumentSplitResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetDocumentSplitResponseBody\result\chunks;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetDocumentSplitResponseBody\result\richTexts;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetDocumentSplitResponseBody\result\sentences;

class result extends Model
{
    /**
     * @var chunks[]
     */
    public $chunks;

    /**
     * @var string[][]
     */
    public $nodes;

    /**
     * @var richTexts[]
     */
    public $richTexts;

    /**
     * @var sentences[]
     */
    public $sentences;
    protected $_name = [
        'chunks' => 'chunks',
        'nodes' => 'nodes',
        'richTexts' => 'rich_texts',
        'sentences' => 'sentences',
    ];

    public function validate()
    {
        if (\is_array($this->chunks)) {
            Model::validateArray($this->chunks);
        }
        if (\is_array($this->nodes)) {
            Model::validateArray($this->nodes);
        }
        if (\is_array($this->richTexts)) {
            Model::validateArray($this->richTexts);
        }
        if (\is_array($this->sentences)) {
            Model::validateArray($this->sentences);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunks) {
            if (\is_array($this->chunks)) {
                $res['chunks'] = [];
                $n1 = 0;
                foreach ($this->chunks as $item1) {
                    $res['chunks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nodes) {
            if (\is_array($this->nodes)) {
                $res['nodes'] = [];
                $n1 = 0;
                foreach ($this->nodes as $item1) {
                    if (\is_array($item1)) {
                        $res['nodes'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['nodes'][$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (null !== $this->richTexts) {
            if (\is_array($this->richTexts)) {
                $res['rich_texts'] = [];
                $n1 = 0;
                foreach ($this->richTexts as $item1) {
                    $res['rich_texts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->sentences) {
            if (\is_array($this->sentences)) {
                $res['sentences'] = [];
                $n1 = 0;
                foreach ($this->sentences as $item1) {
                    $res['sentences'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['chunks'])) {
            if (!empty($map['chunks'])) {
                $model->chunks = [];
                $n1 = 0;
                foreach ($map['chunks'] as $item1) {
                    $model->chunks[$n1++] = chunks::fromMap($item1);
                }
            }
        }

        if (isset($map['nodes'])) {
            if (!empty($map['nodes'])) {
                $model->nodes = [];
                $n1 = 0;
                foreach ($map['nodes'] as $item1) {
                    if (!empty($item1)) {
                        $model->nodes[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->nodes[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (isset($map['rich_texts'])) {
            if (!empty($map['rich_texts'])) {
                $model->richTexts = [];
                $n1 = 0;
                foreach ($map['rich_texts'] as $item1) {
                    $model->richTexts[$n1++] = richTexts::fromMap($item1);
                }
            }
        }

        if (isset($map['sentences'])) {
            if (!empty($map['sentences'])) {
                $model->sentences = [];
                $n1 = 0;
                foreach ($map['sentences'] as $item1) {
                    $model->sentences[$n1++] = sentences::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
