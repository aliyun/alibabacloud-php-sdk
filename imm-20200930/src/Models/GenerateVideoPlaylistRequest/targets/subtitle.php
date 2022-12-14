<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistRequest\targets;

use AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistRequest\targets\subtitle\extractSubtitle;
use AlibabaCloud\Tea\Model;

class subtitle extends Model
{
    /**
     * @var bool
     */
    public $disableSubtitle;

    /**
     * @var extractSubtitle
     */
    public $extractSubtitle;
    protected $_name = [
        'disableSubtitle' => 'DisableSubtitle',
        'extractSubtitle' => 'ExtractSubtitle',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subtitle
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

        return $model;
    }
}
