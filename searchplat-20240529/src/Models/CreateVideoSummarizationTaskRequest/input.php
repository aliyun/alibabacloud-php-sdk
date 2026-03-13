<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\CreateVideoSummarizationTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\CreateVideoSummarizationTaskRequest\input\chunks;

class input extends Model
{
    /**
     * @var chunks[]
     */
    public $chunks;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $oss;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'chunks' => 'chunks',
        'fileName' => 'file_name',
        'oss' => 'oss',
        'url' => 'url',
    ];

    public function validate()
    {
        if (\is_array($this->chunks)) {
            Model::validateArray($this->chunks);
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
                    $res['chunks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->fileName) {
            $res['file_name'] = $this->fileName;
        }

        if (null !== $this->oss) {
            $res['oss'] = $this->oss;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
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
                    $model->chunks[$n1] = chunks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['file_name'])) {
            $model->fileName = $map['file_name'];
        }

        if (isset($map['oss'])) {
            $model->oss = $map['oss'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
