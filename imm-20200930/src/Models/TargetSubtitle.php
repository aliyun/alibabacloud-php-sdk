<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\SDK\Imm\V20200930\Models\TargetSubtitle\extractSubtitle;
use AlibabaCloud\Tea\Model;

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
        'stream'          => 'Stream',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disableSubtitle) {
            $res['DisableSubtitle'] = $this->disableSubtitle;
        }
        if (null !== $this->extractSubtitle) {
            $res['ExtractSubtitle'] = null !== $this->extractSubtitle ? $this->extractSubtitle->toMap() : null;
        }
        if (null !== $this->stream) {
            $res['Stream'] = $this->stream;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TargetSubtitle
     */
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
                $model->stream = $map['Stream'];
            }
        }

        return $model;
    }
}
