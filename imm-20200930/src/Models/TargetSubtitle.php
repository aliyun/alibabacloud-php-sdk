<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetSubtitle\extractSubtitle;

class TargetSubtitle extends Model
{
    /**
     * @var bool
     */
    public $disableSubtitle;

    /**
     * @var extractSubtitle
     */
    public $extractSubtitle;

    /**
     * @var int[]
     */
    public $stream;
    protected $_name = [
        'disableSubtitle' => 'DisableSubtitle',
        'extractSubtitle' => 'ExtractSubtitle',
        'stream' => 'Stream',
    ];

    public function validate()
    {
        if (null !== $this->extractSubtitle) {
            $this->extractSubtitle->validate();
        }
        if (\is_array($this->stream)) {
            Model::validateArray($this->stream);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->disableSubtitle) {
            $res['DisableSubtitle'] = $this->disableSubtitle;
        }

        if (null !== $this->extractSubtitle) {
            $res['ExtractSubtitle'] = null !== $this->extractSubtitle ? $this->extractSubtitle->toArray($noStream) : $this->extractSubtitle;
        }

        if (null !== $this->stream) {
            if (\is_array($this->stream)) {
                $res['Stream'] = [];
                $n1 = 0;
                foreach ($this->stream as $item1) {
                    $res['Stream'][$n1++] = $item1;
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
        if (isset($map['DisableSubtitle'])) {
            $model->disableSubtitle = $map['DisableSubtitle'];
        }

        if (isset($map['ExtractSubtitle'])) {
            $model->extractSubtitle = extractSubtitle::fromMap($map['ExtractSubtitle']);
        }

        if (isset($map['Stream'])) {
            if (!empty($map['Stream'])) {
                $model->stream = [];
                $n1 = 0;
                foreach ($map['Stream'] as $item1) {
                    $model->stream[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
