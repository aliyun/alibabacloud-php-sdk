<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetDocumentSplitResponseBody;

use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetDocumentSplitResponseBody\result\chunks;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetDocumentSplitResponseBody\result\richTexts;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetDocumentSplitResponseBody\result\sentences;
use AlibabaCloud\Tea\Model;

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
        'chunks'    => 'chunks',
        'nodes'     => 'nodes',
        'richTexts' => 'rich_texts',
        'sentences' => 'sentences',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chunks) {
            $res['chunks'] = [];
            if (null !== $this->chunks && \is_array($this->chunks)) {
                $n = 0;
                foreach ($this->chunks as $item) {
                    $res['chunks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nodes) {
            $res['nodes'] = $this->nodes;
        }
        if (null !== $this->richTexts) {
            $res['rich_texts'] = [];
            if (null !== $this->richTexts && \is_array($this->richTexts)) {
                $n = 0;
                foreach ($this->richTexts as $item) {
                    $res['rich_texts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sentences) {
            $res['sentences'] = [];
            if (null !== $this->sentences && \is_array($this->sentences)) {
                $n = 0;
                foreach ($this->sentences as $item) {
                    $res['sentences'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['chunks'])) {
            if (!empty($map['chunks'])) {
                $model->chunks = [];
                $n             = 0;
                foreach ($map['chunks'] as $item) {
                    $model->chunks[$n++] = null !== $item ? chunks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['nodes'])) {
            if (!empty($map['nodes'])) {
                $model->nodes = $map['nodes'];
            }
        }
        if (isset($map['rich_texts'])) {
            if (!empty($map['rich_texts'])) {
                $model->richTexts = [];
                $n                = 0;
                foreach ($map['rich_texts'] as $item) {
                    $model->richTexts[$n++] = null !== $item ? richTexts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['sentences'])) {
            if (!empty($map['sentences'])) {
                $model->sentences = [];
                $n                = 0;
                foreach ($map['sentences'] as $item) {
                    $model->sentences[$n++] = null !== $item ? sentences::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
