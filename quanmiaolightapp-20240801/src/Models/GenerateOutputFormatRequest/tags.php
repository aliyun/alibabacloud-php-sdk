<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GenerateOutputFormatRequest;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @example xxxx
     *
     * @var string
     */
    public $tagDefinePrompt;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $tagName;
    protected $_name = [
        'tagDefinePrompt' => 'tagDefinePrompt',
        'tagName' => 'tagName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagDefinePrompt) {
            $res['tagDefinePrompt'] = $this->tagDefinePrompt;
        }
        if (null !== $this->tagName) {
            $res['tagName'] = $this->tagName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['tagDefinePrompt'])) {
            $model->tagDefinePrompt = $map['tagDefinePrompt'];
        }
        if (isset($map['tagName'])) {
            $model->tagName = $map['tagName'];
        }

        return $model;
    }
}
